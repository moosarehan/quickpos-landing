# QuickPOS Bug Log

This document tracks all bugs discovered during the testing phase of the QuickPOS project.

---

## BUG-001: Missing Email Format Validation
| Field       | Detail                                                    |
|-------------|-----------------------------------------------------------|
| **Status**  | ✅ Fixed                                                  |
| **Severity**| High                                                      |
| **Found By**| Automated Testing (PHPUnit - ContactFormTest)             |
| **Date**    | 2026-05-10                                                |
| **File**    | `process_contact.php`                                     |
| **Description** | The contact form only checks if the email field is empty. It does not validate the email format. Users can submit invalid strings like "asdf" and the form accepts it. |
| **Fix**     | Added `filter_var()` email validation to `process_contact.php`. |

---

## BUG-002: Incorrect CSS File Path on Thank-You Page
| Field       | Detail                                                    |
|-------------|-----------------------------------------------------------|
| **Status**  | ✅ Fixed                                                  |
| **Severity**| Medium                                                    |
| **Found By**| Manual Testing (Visual Inspection)                        |
| **Date**    | 2026-05-10                                                |
| **File**    | `thank-you.html` (Line 5)                                |
| **Description** | The `<link>` tag references `css/style.css` but the actual file is `css/styles.css` (with an "s"). This causes the thank-you page to render without any styles. |
| **Fix**     | Corrected the `href` from `css/style.css` to `css/styles.css`. |

---

## BUG-003: No Input Sanitization (XSS Vulnerability)
| Field       | Detail                                                    |
|-------------|-----------------------------------------------------------|
| **Status**  | ✅ Fixed                                                  |
| **Severity**| High                                                      |
| **Found By**| Code Review                                               |
| **Date**    | 2026-05-10                                                |
| **File**    | `process_contact.php`                                     |
| **Description** | User input from `$_POST` is not sanitized before processing. This creates a Cross-Site Scripting (XSS) vulnerability where malicious scripts could be injected through form fields. |
| **Fix**     | Added `htmlspecialchars()` and `trim()` sanitization to all input fields before validation. |
