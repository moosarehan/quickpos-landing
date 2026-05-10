<?php
// [SCRUM-52] Contact form validation tests
use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    private function validateForm(array $data): array
    {
        $errors = [];
        if (empty($data['name'])) $errors[] = 'Name required';
        if (empty($data['email'])) $errors[] = 'Email required';
        elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email';
        if (empty($data['message'])) $errors[] = 'Message required';
        return $errors;
    }

    public function testEmptyFormFails(): void
    {
        $errors = $this->validateForm(['name' => '', 'email' => '', 'message' => '']);
        $this->assertNotEmpty($errors);
    }

    public function testValidFormPasses(): void
    {
        $errors = $this->validateForm([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'Hello'
        ]);
        $this->assertEmpty($errors);
    }
}
