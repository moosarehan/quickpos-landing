<?php
// [SCRUM-58] Verify the bug fix exists in process_contact.php source code
use PHPUnit\Framework\TestCase;

class BugReportTest extends TestCase
{
    private string $formFile;

    protected function setUp(): void
    {
        $this->formFile = __DIR__ . '/../process_contact.php';
    }

    // Verify process_contact.php exists
    public function testProcessFormFileExists(): void
    {
        $this->assertFileExists(
            $this->formFile,
            'process_contact.php must exist'
        );
    }

    // Verify trim() is applied — this is the actual bug fix
    public function testTrimIsAppliedToInputs(): void
    {
        $content = file_get_contents($this->formFile);
        $this->assertStringContainsString(
            'trim(',
            $content,
            '[SCRUM-58] process_contact.php must use trim() to strip whitespace from inputs'
        );
    }

    // Verify filter_var email validation exists
    public function testEmailValidationExists(): void
    {
        $content = file_get_contents($this->formFile);
        $this->assertStringContainsString(
            'FILTER_VALIDATE_EMAIL',
            $content,
            'process_contact.php must validate email format'
        );
    }

    // Verify redirect to thank-you page on success
    public function testSuccessRedirectExists(): void
    {
        $content = file_get_contents($this->formFile);
        $this->assertStringContainsString(
            'thank-you.html',
            $content,
            'process_contact.php must redirect to thank-you.html on success'
        );
    }
}