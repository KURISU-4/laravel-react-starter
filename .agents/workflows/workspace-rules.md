---
description: 
---

WORKSPACE-SPECIFIC RULES

1. Laravel & React Version Compliance
- The workspace is strictly running Laravel 12.
- React is installed inside resources/js using Vite.
- All backend and frontend code must be compatible with Laravel 12 and the current stable React version.
- Do NOT create a separate React application outside Laravel.
- No deprecated APIs or outdated packages allowed.

2. React Architecture Rules
React must follow this structure:

resources/js/
│
├── pages/
├── components/
├── context/
├── services/
├── router.jsx
├── App.jsx
└── main.jsx

- Pages represent routes.
- Components are reusable UI building blocks.
- API logic must be centralized inside services/.
- Global state must use Context API (Auth, Theme) unless approved.
- No business logic inside presentational components.

3. UI / Design Consistency
- Maintain consistent design across:
  - Font Family
  - Buttons
  - Cards
  - Inputs
  - Modals
  - Tables / Lists
  - Navbar / Layout

Styling Rules:
- Tailwind CSS for global layout and utilities.
- Vanilla CSS Modules (Component.module.css) for component-level styling.
- No inline styling unless approved.
- Centralized design system for spacing, colors, radius, hover states.
- Dark mode must use Tailwind dark class strategy.
- No mixing random styling approaches.

4. Component Reuse
- Reuse shared components.
- No duplicate UI logic across pages.
- Before creating a new component, check if one already exists.
- Any shared component modification must be documented and approved.

5. Routing & Naming Conventions

Backend:
- Follow Laravel 12 conventions.
- Controllers: PascalCase (e.g., PortfolioController)
- Models: Singular PascalCase (Portfolio)
- RESTful API routes.

Frontend:
- Components: PascalCase (Navbar.jsx)
- CSS Modules: ComponentName.module.css
- Context files: AuthContext.jsx
- Service files: api.js
- Clean URL structure only.

6. React State & Logic Rules
- Avoid excessive useState when grouping is possible.
- Use object-based state for forms.
- API calls must use centralized Axios instance.
- No direct fetch calls unless approved.
- Protected routes must use a ProtectedRoute wrapper.
- No direct state mutation (immutability required).

7. Security & Validation
- All forms must have frontend and backend validation.
- No disabling CSRF.
- No bypassing middleware.
- All database IDs used in:
  - URLs
  - Forms
  - HTML attributes
  - API calls
  Must be encrypted using Laravel Crypt.
- Unauthorized access must return proper 401 responses.
- Never expose raw database IDs.

8. Dark Mode Compliance
- Use Tailwind dark class strategy.
- Persist preference in localStorage.
- Apply at root or body level.
- Must not break layout.
- Maintain accessible contrast ratios.
- No duplicated dark CSS files.

9. Approval Before Changes (SAFE CODE MODIFICATION POLICY)
- No automatic file overwrites.
- No destructive edits.
- No silent refactors.
- All changes must be proposed, explained, and approved before implementation.

10. Documentation & Logging
Every approved change must document:
- What was changed
- Why it was changed
- Files affected
- Components affected
- DB impact (if any)
- Risks or side effects

11. Testing Compliance
- Code must be testable locally before deployment.
- Follow Laravel 12 testing structure.
- API responses must be testable.
- No breaking existing features.

12. Performance & Clean Code Standards
- Avoid unnecessary re-renders.
- Use proper keys in lists.
- No heavy logic inside JSX.
- No console.logs in production-ready code.
- Keep components small and focused.
- Follow separation of concerns.