# ADC_REGISTER_FORM

This is the ADC membership registration project (PHP + front-end assets). This repo contains the application files for local development using XAMPP.

## Quick local steps
1. Place this folder in your web server root (e.g. `C:\xampp\htdocs\ADC_REGISTER_FORM`).
2. Start Apache + MySQL in XAMPP.
3. Visit `http://localhost/ADC_REGISTER_FORM`.

## How to push to GitHub
Option A — create repo on GitHub website (recommended):
- Go to https://github.com/new, choose a name (e.g. `ADC_REGISTER_FORM`), create repository.
- On the newly created repository page you'll see instructions. Run these in PowerShell from the project folder:

```powershell
# run inside the project root
git remote add origin https://github.com/<your-username>/<repo-name>.git
git branch -M main
git push -u origin main
```

Option B — using GitHub CLI (if installed):
```powershell
# creates repo remotely and pushes current directory as main
gh repo create <your-username>/<repo-name> --public --source=. --remote=origin --push
```

## Notes
- The `uploads/` directory is ignored by default. If you need to keep sample uploads in the repo, move them outside `uploads/` or remove the rule in `.gitignore`.
- If you prefer `master` instead of `main`, adapt the commands accordingly.
