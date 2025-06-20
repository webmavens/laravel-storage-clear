# Laravel Storage Clear Command

A lightweight Laravel Artisan command to **clear the contents of a storage disk or a specific folder** inside it.  
Supports local, public, S3, and any configured Laravel filesystem.

---

## 🛠️ Features

✅ Clear all files from a given disk.

✅ Target a specific folder within the disk for selective cleanup.

✅ Preserve .gitignore files to retain version control best practices.

✅ Use --force to skip confirmation prompts in production environments.

✅ Detailed feedback when:

    >Disk is not configured
    >Folder is not found
    >Operation is skipped due to no confirmation

## 🚀 Installation

You can install the package via Composer:

```bash
composer require webmavens/storage-clear
```

## ⚙️ Artisan Command

```bash
php artisan storage:clear
```

## 🧾 Command Options

| Use Case   | Description                                                   | Default |
| ---------- | ------------------------------------------------------------- | ------- |
| `--disk`   | The storage disk to clear (`local`, `public`, `s3`, etc.)     | `local` |
| `--folder` | The specific folder to clear within the disk (optional)       | `null`  |
| `--force`  | Force the operation in production without confirmation prompt | `false` |


## 📦 Usage
```
php artisan storage:clear
php artisan storage:clear --disk=local
php artisan storage:clear --disk=s3 --folder=foldername
php artisan storage:clear --disk=s3 --folder=somefolder/foldername
php artisan storage:clear --disk=local --folder=foldername --force //Force the operation to run when in production
```

## 🧪 Sample Output

```
> php artisan storage:clear --disk=local --folder=staging

Cleared folder [staging] on disk [local]
```
```
> php artisan storage:clear --disk=unknown

❌ Disk [unknown] is not configured. Available disks: local,s3.
```
```
> php artisan storage:clear --disk=s3 --folder=archive

⚠️ You're running in production. Use --force to confirm.
Operation cancelled.
```