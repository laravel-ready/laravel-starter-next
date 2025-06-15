# 🐞 Debugging

With pre-configured logging, debugging and profiling tools, you can easily debug your application. There are multiple tools for different purposes.

---

- [🐞 Debugging](#-debugging)
  - [🔸 Buggregator](#-buggregator)
    - [🔸 Inline Logging](#-inline-logging)
    - [🔸 Mail Capturing](#-mail-capturing)
    - [🔸 Xhprof](#-xhprof)
  - [🔸 References](#-references)

## 🔸 Buggregator

**[Buggregator](https://buggregator.dev/)** is a unified logging and debugging UI tool for Laravel applications. It's compatible with existing Ray, Symfony/VarDumper, Monolog, Sentry tools. Also it supports SMTP for sending emails.

> {info} Buggregator server is running in the docker container. Check `docker-compose-dev.yml` for more details.

### 🔸 Inline Logging

With [trap](https://github.com/buggregator/trap) you can log any data quickly like dd or ray ([see](https://docs.buggregator.dev/trap/usage.html) for more details).

```php
trap('info', 'Hello World');
```

### 🔸 Mail Capturing

Buggregator also supports **[SMTP](https://docs.buggregator.dev/config/smtp.html)** for sending emails. It's automatically captured and sent to the Buggregator server.

### 🔸 Xhprof

**[Xhprof](https://www.php.net/manual/en/book.xhprof.php)** is a performance profiling tool for PHP. It's automatically captured and sent to the Buggregator server. This tool is installed in the `.docker/dev/Dockerfile` and implemented with [maantje/xhprof-buggregator-laravel](https://github.com/maantje/xhprof-buggregator-laravel) laravel package.

Usage:

```php
use SpiralPackages\Profiler\Profiler;

$profiler = app(Profiler::class);
$profiler->start();

// your logic...

$profiler->end();
```

## 🔸 References

- [Buggregator](https://buggregator.dev/), [docs](https://docs.buggregator.dev/)
- [Xhprof](https://www.php.net/manual/en/book.xhprof.php)
