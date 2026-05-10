# QuickPOS Landing Page

![CI Pipeline](https://github.com/moosarehan/quickpos-landing/actions/workflows/ci.yml/badge.svg)
![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php)
![PHPUnit](https://img.shields.io/badge/Tested%20With-PHPUnit-green)
![License](https://img.shields.io/badge/License-MIT-yellow)

A premium, professional, and responsive landing page for the **QuickPOS** system.
This project was developed as part of a Software Project Management assignment,
focusing on high-quality UI/UX and professional development workflows
(Jira, GitFlow, and Slack integration).

---

## 🚀 Features
- **Premium UI/UX**: Modern design with glassmorphism, smooth gradients, and interactive animations.
- **Fully Responsive**: Optimized for desktop, tablet, and mobile devices.
- **PHP Backend**: Functional contact form with server-side validation and success redirection.
- **Single Page Navigation**: Smooth scrolling to all sections (Features, Pricing, Contact).

---

## 🛠️ Tech Stack
- **Frontend**: HTML5, CSS3 (Vanilla), JavaScript (ES6)
- **Backend**: PHP (XAMPP environment)
- **Testing**: PHPUnit 10
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Google Fonts (Inter)

---

## 📋 Setup Instructions
To run this project locally, follow these steps:

1. **Install XAMPP**: Ensure you have XAMPP installed on your machine.
2. **Clone the Repository**: Clone this repo into your XAMPP `htdocs` folder:
   ```bash
   git clone https://github.com/moosarehan/quickpos-landing.git
   ```
3. **Start Apache**: Open the XAMPP Control Panel and start the **Apache** server.
4. **Access the Website**: Open your browser and navigate to:
   `http://localhost/quickpos-landing/`

---

## 🧪 Run Tests Locally

```bash
# Windows
vendor\bin\phpunit --colors=always

# Mac / Linux
./vendor/bin/phpunit --colors=always
```

---

## ⚙️ CI/CD Pipeline

This project uses **GitHub Actions** for continuous integration.
The pipeline runs automatically on every push to `feature/**` and `bugfix/**` branches,
and on every Pull Request targeting `main`.

### Pipeline Stages

| Stage | Job | What It Does |
|---|---|---|
| Stage 10 | Jira Commit Validation | Fails if commit message has no `[SCRUM-XXX]` |
| Stage 3 | PHP Syntax Check | Runs `php -l` on all PHP files |
| Stage 4 | PHPUnit Automated Tests | Runs the full test suite |
| Final | Pipeline Complete | Confirms all jobs passed |

> Stages 3 and 4 run **in parallel** after Stage 10 passes.

---

## 📊 Process Rigor
- **Jira**: Project tracking with Epics, Stories, and Tasks across 3 sprints.
- **GitFlow**: Strict branching strategy using `feature/` and `bugfix/` branches.
- **Slack**: Real-time notifications for all commits and Pull Requests.
- **CI/CD**: GitHub Actions pipeline with automated testing and commit validation.

---

## 👥 Team

| Name | Role |
|---|---|
| Student 1 | PM & QA |
| Student 2 | Tech Lead |

---

## 🔗 Links
- [Jira Board](https://YOUR_JIRA_LINK_HERE)
- Slack Channel: `#quickpos-dev`

---

*Created for the SPM Assignment.*