<?php

/**
 * Содержит все строки перевода для различных событий логов активности.
 * Они должны быть ключами по значению перед двоеточием (:)
 * в названии события. Если двоеточия нет, они должны быть на
 * верхнем уровне.
 */
return [
    'auth' => [
        'fail' => 'Неудачная попытка входа',
        'success' => 'Вход выполнен успешно',
        'password-reset' => 'Сброс пароля',
        'reset-password' => 'Запрос на сброс пароля',
        'checkpoint' => 'Запрос двухфакторной аутентификации',
        'recovery-token' => 'Использован токен восстановления двухфакторной аутентификации',
        'token' => 'Решена задача двухфакторной аутентификации',
        'ip-blocked' => 'Запрос от неуказанного IP-адреса был заблокирован для :identifier',
        'sftp' => [
            'fail' => 'Неудачная попытка входа через SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Изменен адрес электронной почты с :old на :new',
            'password-changed' => 'Изменен пароль',
        ],
        'api-key' => [
            'create' => 'Создан новый API ключ :identifier',
            'delete' => 'Удален API ключ :identifier',
        ],
        'ssh-key' => [
            'create' => 'Добавлен SSH ключ :fingerprint к аккаунту',
            'delete' => 'Удален SSH ключ :fingerprint из аккаунта',
        ],
        'two-factor' => [
            'create' => 'Включена двухфакторная аутентификация',
            'delete' => 'Отключена двухфакторная аутентификация',
        ],
    ],
    'server' => [
        'reinstall' => 'Сервер переустановлен',
        'console' => [
            'command' => 'Выполнена команда ":command" на сервере',
        ],
        'power' => [
            'start' => 'Запущен сервер',
            'stop' => 'Остановлен сервер',
            'restart' => 'Перезагружен сервер',
            'kill' => 'Процесс сервера принудительно завершен',
        ],
        'backup' => [
            'download' => 'Загружен резервный файл :name',
            'delete' => 'Удален резервный файл :name',
            'restore' => 'Восстановлен резервный файл :name (удаленные файлы: :truncate)',
            'restore-complete' => 'Восстановление резервного файла :name завершено',
            'restore-failed' => 'Не удалось завершить восстановление резервного файла :name',
            'start' => 'Начат новый резервный файл :name',
            'complete' => 'Резервный файл :name помечен как завершенный',
            'fail' => 'Резервный файл :name помечен как неудачный',
            'lock' => 'Резервный файл :name заблокирован',
            'unlock' => 'Резервный файл :name разблокирован',
        ],
        'database' => [
            'create' => 'Создана новая база данных :name',
            'rotate-password' => 'Пароль для базы данных :name изменен',
            'delete' => 'Удалена база данных :name',
        ],
        'file' => [
            'compress_one' => 'Сжат файл :directory:file',
            'compress_other' => 'Сжаты :count файлов в :directory',
            'read' => 'Просмотрено содержимое :file',
            'copy' => 'Создана копия :file',
            'create-directory' => 'Создан каталог :directory:name',
            'decompress' => 'Распаковано :files в :directory',
            'delete_one' => 'Удален :directory:files.0',
            'delete_other' => 'Удалено :count файлов в :directory',
            'download' => 'Загружен :file',
            'pull' => 'Загружен удаленный файл из :url в :directory',
            'rename_one' => 'Переименован :directory:files.0.from в :directory:files.0.to',
            'rename_other' => 'Переименовано :count файлов в :directory',
            'write' => 'Записан новый контент в :file',
            'upload' => 'Начата загрузка файла',
            'uploaded' => 'Загружен :directory:file',
        ],
        'sftp' => [
            'denied' => 'Доступ через SFTP заблокирован из-за разрешений',
            'create_one' => 'Создан :files.0',
            'create_other' => 'Создано :count новых файлов',
            'write_one' => 'Изменено содержимое :files.0',
            'write_other' => 'Изменено содержимое :count файлов',
            'delete_one' => 'Удален :files.0',
            'delete_other' => 'Удалено :count файлов',
            'create-directory_one' => 'Создан каталог :files.0',
            'create-directory_other' => 'Создано :count каталогов',
            'rename_one' => 'Переименован :files.0.from в :files.0.to',
            'rename_other' => 'Переименовано или перемещено :count файлов',
        ],
        'allocation' => [
            'create' => 'Добавлено :allocation к серверу',
            'notes' => 'Обновлены заметки для :allocation с ":old" на ":new"',
            'primary' => 'Установлено :allocation как основное выделение сервера',
            'delete' => 'Удалено выделение :allocation',
        ],
        'schedule' => [
            'create' => 'Создано расписание :name',
            'update' => 'Обновлено расписание :name',
            'execute' => 'Ручное выполнение расписания :name',
            'delete' => 'Удалено расписание :name',
        ],
        'task' => [
            'create' => 'Создана новая задача ":action" для расписания :name',
            'update' => 'Обновлена задача ":action" для расписания :name',
            'delete' => 'Удалена задача для расписания :name',
        ],
        'settings' => [
            'rename' => 'Сервер переименован с :old в :new',
            'description' => 'Изменено описание сервера с :old на :new',
        ],
        'startup' => [
            'edit' => 'Изменена переменная :variable с ":old" на ":new"',
            'image' => 'Обновлен Docker-образ для сервера с :old на :new',
        ],
        'subuser' => [
            'create' => 'Добавлен :email как подменеджер',
            'update' => 'Обновлены права подменеджера :email',
            'delete' => 'Удален :email как подменеджер',
        ],
    ],
];
