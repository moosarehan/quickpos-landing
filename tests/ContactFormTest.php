<?php
// [SCRUM-53] Contact form validation tests (5 mandatory cases)
use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * Helper method to simulate form validation logic
     */
    private function validateForm(array $data): array
    {
        $errors = [];
        if (empty($data['name'])) $errors[] = 'Name required';
        if (empty($data['email'])) $errors[] = 'Email required';
        elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email';
        if (empty($data['message'])) $errors[] = 'Message required';
        return $errors;
    }

    // TC1: Test that an empty form returns errors
    public function testEmptyFormFails(): void
    {
        $errors = $this->validateForm(['name' => '', 'email' => '', 'message' => '']);
        $this->assertNotEmpty($errors, 'Empty form should return validation errors');
    }

    // TC2: Test that an invalid email format returns an error
    public function testInvalidEmailFails(): void
    {
        $errors = $this->validateForm([
            'name' => 'John Doe',
            'email' => 'invalid-email-format',
            'message' => 'Interested in QuickPOS'
        ]);
        $this->assertContains('Invalid email', $errors);
    }

    // TC3: Test that missing name returns an error
    public function testMissingNameFails(): void
    {
        $errors = $this->validateForm([
            'name' => '',
            'email' => 'john@example.com',
            'message' => 'Hello'
        ]);
        $this->assertContains('Name required', $errors);
    }

    // TC4: Test that missing message returns an error
    public function testMissingMessageFails(): void
    {
        $errors = $this->validateForm([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => ''
        ]);
        $this->assertContains('Message required', $errors);
    }

    // TC5: Test that a perfectly valid form has zero errors
    public function testValidFormPasses(): void
    {
        $errors = $this->validateForm([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'message' => 'I would like to request a demo.'
        ]);
        $this->assertEmpty($errors, 'Valid data should result in no errors');
    }
}
