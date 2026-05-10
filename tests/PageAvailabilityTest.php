<?php
// [SCRUM-54] Page availability and response tests
use PHPUnit\Framework\TestCase;

class PageAvailabilityTest extends TestCase
{
    // TC1: Check if the main index file exists
    public function testIndexFileExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../index.php', 'index.php must be present in the root directory.');
    }

    // TC2: Check if the contact processor exists
    public function testContactProcessorExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../process_contact.php', 'process_contact.php must be present.');
    }

    // TC3: Check if the thank you page exists
    public function testThankYouPageExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../thank-you.html', 'thank-you.html must be present.');
    }

    // TC4: Verify that index.php contains the required sections
    public function testIndexContainsRequiredSections(): void
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('id="features"', $content, 'Page missing Features section');
        $this->assertStringContainsString('id="pricing"', $content, 'Page missing Pricing section');
        $this->assertStringContainsString('id="contact"', $content, 'Page missing Contact section');
    }

    // TC5: Verify that the contact form is correctly configured
    public function testContactFormConfiguration(): void
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('action="process_contact.php"', $content, 'Form action is incorrect');
        $this->assertStringContainsString('method="POST"', $content, 'Form method must be POST');
    }
}
