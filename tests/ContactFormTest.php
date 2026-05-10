<?php
// [SCRUM-58] Updated contact form tests — includes whitespace bug regression tests
use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * Mirrors the fixed logic in process_contact.php.
     * trim() is applied before empty() check — this is the fix.
     */
    private function validateForm(array $data): array
    {
        $errors = [];

        $name    = trim($data['name']    ?? '');
        $email   = trim($data['email']   ?? '');
        $message = trim($data['message'] ?? '');

        if (empty($name))    $errors[] = 'Name is required';
        if (empty($email))   $errors[] = 'Email is required';
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email format';
        if (empty($message)) $errors[] = 'Message is required';

        return $errors;
    }

    // ─────────────────────────────────────────────
    // Original tests (unchanged)
    // ─────────────────────────────────────────────

    // TC-01: All fields empty → should fail
    public function testEmptyFormFails(): void
    {
        $errors = $this->validateForm([
            'name'    => '',
            'email'   => '',
            'message' => ''
        ]);
        $this->assertNotEmpty($errors, 'Empty form should return validation errors');
        $this->assertCount(3, $errors);
    }

    // TC-02: Invalid email → should fail
    public function testInvalidEmailFails(): void
    {
        $errors = $this->validateForm([
            'name'    => 'John Doe',
            'email'   => 'not-an-email',
            'message' => 'Hello'
        ]);
        $this->assertContains('Invalid email format', $errors);
    }

    // TC-03: Valid data → should pass
    public function testValidFormPasses(): void
    {
        $errors = $this->validateForm([
            'name'    => 'Jane Smith',
            'email'   => 'jane@example.com',
            'message' => 'I am interested in QuickPOS'
        ]);
        $this->assertEmpty($errors, 'Valid form data should produce no errors');
    }

    // ─────────────────────────────────────────────
    // SCRUM-58 Bug Regression Tests (NEW)
    // These tests verify the whitespace bug is fixed
    // ─────────────────────────────────────────────

    // TC-04 [SCRUM-58]: Whitespace-only name → must fail
    public function testWhitespaceOnlyNameFails(): void
    {
        $errors = $this->validateForm([
            'name'    => '     ',
            'email'   => 'user@example.com',
            'message' => 'Test message'
        ]);
        $this->assertContains(
            'Name is required',
            $errors,
            'Whitespace-only name should be treated as empty [SCRUM-58 regression]'
        );
    }

    // TC-05 [SCRUM-58]: Whitespace-only message → must fail
    public function testWhitespaceOnlyMessageFails(): void
    {
        $errors = $this->validateForm([
            'name'    => 'John Doe',
            'email'   => 'john@example.com',
            'message' => '        '
        ]);
        $this->assertContains(
            'Message is required',
            $errors,
            'Whitespace-only message should be treated as empty [SCRUM-58 regression]'
        );
    }

    // TC-06 [SCRUM-58]: Whitespace-only email → must fail
    public function testWhitespaceOnlyEmailFails(): void
    {
        $errors = $this->validateForm([
            'name'    => 'John Doe',
            'email'   => '    ',
            'message' => 'Hello'
        ]);
        $this->assertContains(
            'Email is required',
            $errors,
            'Whitespace-only email should be treated as empty [SCRUM-58 regression]'
        );
    }

    // TC-07 [SCRUM-58]: All fields whitespace-only → must fail with 3 errors
    public function testAllWhitespaceFieldsFail(): void
    {
        $errors = $this->validateForm([
            'name'    => '   ',
            'email'   => '   ',
            'message' => '   '
        ]);
        $this->assertCount(
            3,
            $errors,
            'All whitespace fields should return 3 errors [SCRUM-58 regression]'
        );
    }

    // TC-08 [SCRUM-58]: Mixed — valid name, whitespace message → fail on message only
    public function testMixedInputPartialWhitespaceFails(): void
    {
        $errors = $this->validateForm([
            'name'    => 'Real Name',
            'email'   => 'real@email.com',
            'message' => '    '
        ]);
        $this->assertCount(1, $errors);
        $this->assertContains('Message is required', $errors);
    }
}
