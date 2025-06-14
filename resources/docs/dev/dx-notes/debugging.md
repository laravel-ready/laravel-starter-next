# 🐞 Debugging

With pre-configured logging and debugging tools, you can easily debug your application. There are multiple tools for different purposes.

---

- [🐞 Debugging](#-debugging)
  - [🔸 Buggregator](#-buggregator)
    - [🔸 Inline Logging](#-inline-logging)
    - [🔸 Mail Capturing](#-mail-capturing)

<a name="buggregator"></a>

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
