# Запуск проекта Laravel и MariaDB (MAMP)

## 1. Запуск MariaDB (MySQL) в MAMP

1. Откройте **MAMP** и нажмите **Start Servers**.
2. Убедитесь, что индикатор MySQL (зелёный) горит — сервер БД запущен на порту **3306**.

Проверка из терминала:
```bash
/Applications/MAMP/Library/bin/mysql -uroot -p -e "SELECT 1"
```
Введите пароль пользователя `root` (если пароль не задавали — просто Enter).

---

## 2. Пароль БД в проекте

В файле **`.env`** задайте пароль MySQL/MariaDB, который вы используете в MAMP:

```env
DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=ВАШ_ПАРОЛЬ_РОСТА
```

- Если пароль пустой — оставьте `DB_PASSWORD=`.
- Часто в MAMP по умолчанию ставят пароль **`root`** — попробуйте его.

---

## 3. Создание базы данных

Если базы `laravel` ещё нет, создайте её:

```bash
/Applications/MAMP/Library/bin/mysql -uroot -p -e "CREATE DATABASE IF NOT EXISTS laravel CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

---

## 4. Миграции Laravel

После запуска MAMP и настройки `.env`:

```bash
cd /Applications/MAMP/htdocs/lara
php artisan migrate --force
```

---

## 5. Запуск приложения

**Вариант A — встроенный сервер PHP (рекомендуется для разработки):**
```bash
cd /Applications/MAMP/htdocs/lara
php artisan serve
```
Откройте в браузере: **http://127.0.0.1:8000**

**Вариант B — через MAMP (Apache):**  
Убедитесь, что серверы MAMP запущены, затем откройте:  
**http://localhost/lara/public**  
(или ваш виртуальный хост, если настроен).

---

## 6. Если что-то не работает

- **Access denied for user 'root'** — неверный пароль в `.env` (см. шаг 2) или пароль root в MAMP нужно сбросить/узнать в настройках MAMP.
- **Unknown database 'laravel'** — создайте БД (шаг 3).
- **Connection refused** — убедитесь, что в MAMP нажато **Start Servers** и MySQL запущен.
