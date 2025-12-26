# 🔄 Update

WIP...

---

- [🔄 Update](#-update)
  - [🔸 Local](#-local)
  - [🔸 Production](#-production)

## 🔸 Local

To updated dependencies automatically there is a script in `.scripts/local` directory.

```bash
# linux/unix
sh .scripts/local/bump.sh

# windows
.scripts\local\bump.bat
```

Before accepting the changes, you should review the changes and make sure that the stability of the project is not affected.

> {info} This script will update dependencies with [npm-check-updates](https://github.com/raineorshine/npm-check-updates) and `composer update` tools. Just updates the dependencies to the latest minor and patch version. You can modify the script for your needs.

## 🔸 Production

In production or cloud environment, you should update dependencies with your CI/CD pipeline.
