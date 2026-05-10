# CI/CD Pipeline Documentation we are implementing this for quickpos project

**Ticket:** SCRUM-57
**Branch:** feature/SCRUM-57-status-badge

---

## Pipeline Overview

The QuickPOS CI pipeline runs automatically via GitHub Actions on every
push to `feature/**` or `bugfix/**` branches and on all Pull Requests to `main`.

## Badge

The pipeline status badge is displayed at the top of README.md:

![CI Pipeline](https://github.com/moosarehan/quickpos-landing/actions/workflows/ci.yml/badge.svg)

| Badge Colour | Meaning |
|---|---|
| ✅ Green (passing) | All pipeline stages passed |
| ❌ Red (failing) | One or more stages failed |
| ⚪ Grey (no status) | Pipeline has not run yet |

## Workflow File Location

```
.github/
└── workflows/
    └── ci.yml
```

## Jobs and Execution Order

```
[Push / PR event]
        │
        ▼
┌─────────────────────┐
│  validate-commit    │  Stage 10 — Jira commit ID check
│  (runs first)       │
└────────┬────────────┘
         │ passes
    ┌────┴────┐
    │         │        ← Parallel execution (Stage 11)
    ▼         ▼
┌────────┐ ┌──────────────┐
│code-   │ │automated-    │
│quality │ │tests         │
│Stage 3 │ │Stage 4       │
└────┬───┘ └──────┬───────┘
     │             │
     └──────┬──────┘
            ▼
    ┌───────────────┐
    │pipeline-status│  Final confirmation
    └───────────────┘
```