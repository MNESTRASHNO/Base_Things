# Мой проект

Добро пожаловать в Мой проект! Пожалуйста, выберите нужный язык:

- [Русский](README.md), [English](README-en.md)
# Воркшоп по Расследованию Инцидентов

## Для студентов РТУ МИРЭА

На этом воркшопе, посвященном расследованию инцидента, вам предстоит взять на себя роль детектива и разобраться в том, как злоумышленники получили доступ к целевой машине.

![KILL_CHAIN](https://github.com/MNESTRASHNO/Base_Things/blob/main/photo_2024-07-23_15-32-20.jpg?raw=true)

## Немного предыстории, так сказать лорный момент

Нас попросили выяснить, как группа злоумышленников получила доступ к нашей целевой машине. Для этого нам предстоит провести собственное расследование и атаку на машину, чтобы понять, что именно произошло.

## То, что вам будет необходимо:
- Виртуальная машина, на которой вы развернете сайт
- nmap и gobuster

## Краткая сводка от меня: что будет в воркшопе

Цель этого килл-чейна — познакомить студентов с базовыми утилитами и методами для проведения пентестинга. В ходе воркшопа мы рассмотрим следующие этапы:

### 1. Сбор информации

Поскольку мы являемся сотрудниками, которые детально разбираются в инциденте, нам предоставили часть необходимых данных, таких как IP-адрес целевой машины. Основные инструменты для сбора информации будут включать:

- **`nmap`** для сканирования сети

### 2. Сканирование

На этом этапе мы будем использовать утилиты для сканирования и поиска уязвимостей:

- **`nmap`** для сканирования портов и служб
- **`gobuster`** для поиска скрытых директорий и файлов на веб-сервере

### 3. Эксплуатация

Мы сосредоточимся на эксплуатации уязвимостей, таких как:

- **SQL Injection** — уязвимость в веб-приложениях, позволяющая манипулировать базой данных

### 4. Повышение привилегий

На этом этапе мы будем пытаться получить более высокий уровень доступа, используя методы, такие как:

- **`sudo -l`** для проверки привилегий
- Поиск и использование уязвимостей для получения root-доступа

### 5. Post-Exploitation

На завершающем этапе вы сможете:

- Украсть секретную информацию и выполнять другие действия в зависимости от ваших целей

## Заключение

Воркшоп предоставит вам практические навыки и знания для проведения пентестинга и расследования инцидентов. Не забудьте использовать полученные знания ответственно и этично!

---

Если у вас есть вопросы, не стесняйтесь обращаться к организаторам воркшопа.

**Удачи и успешного расследования!**
