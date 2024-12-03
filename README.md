
# Language Generator


Translate language files from one language to another using Google Translate.


## How to us

You can use it like following
```bash
  php artisan lang-translate [from] [to] --source_path=
```

Generator will translate [from] to [to] language.
Get all files and look up files inside [source_path] and get all variables inside the file; create a file and translate using translate.googleapis.com.

This is what the translation process looks like.

```bash
❯ php artisan lang-translate en ckb --source_path=en

 🚀 Translate to 'ckb'
 1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100% -- 💯
```


## Usage example

- Single output
```bash
php artisan lang-translate en ckb --source_path=en
```
- Multiple output
```bash
php artisan lang-translate enckb ar fr pt-PT pt-BR zh-CN --source_path=en
```
- If you are using json translation
```bash
php artisan lang-translate en ckb --source_path=en --json
```

as well as you can specify the translation distination by using [--destination_path=]

like following:
```bash
php artisan lang-translate en ckb --source_path=en --destination_path=path/to/ckb
```
## Authors

- [@Shad Y. Abdalla](https://www.github.com/shadcs)

