# Оглавление

1. [Приведите примеры свойств для позиционирования в CSS](#1-приведите-примеры-свойств-для-позиционирования-в-css)
2. [Приведите примеры свойств для работы с изображениями](#2-приведите-примеры-свойств-для-работы-с-изображениями)
3. [Что представляет собой тэг li? Приведите примеры](#3-что-представляет-собой-тэг-li-приведите-примеры)
4. [Охарактеризуйте изученный набор свойств в технологии grid? Приведите примеры](#4-охарактеризуйте-изученный-набор-свойств-в-технологии-grid-приведите-примеры)
5. [Что представляет собой тэг table? Приведите примеры](#5-что-представляет-собой-тэг-table-приведите-примеры)
6. [Что представляет собой позиционирование в CSS? Приведите примеры](#6-что-представляет-собой-позиционирование-в-css-приведите-примеры)
7. [Что представляет собой тэг p? Приведите примеры](#7-что-представляет-собой-тэг-p-приведите-примеры)
8. [Что представляет собой тэг html? Приведите примеры](#8-что-представляет-собой-тэг-html-приведите-примеры)
9. [Что представляет собой тэг a? Приведите примеры](#9-что-представляет-собой-тэг-a-приведите-примеры)
10. [Перечислите этапы создания макета веб-страницы](#10-перечислите-этапы-создания-макета-веб-страницы)
11. [Что представляет собой тэг br? Приведите примеры](#11-что-представляет-собой-тэг-br-приведите-примеры)
12. [В чем отличие между абсолютным и относительным позиционированием?](#12-в-чем-отличие-между-абсолютным-и-относительным-позиционированием)
13. [Что представляет собой тэг ol? Приведите примеры](#13-что-представляет-собой-тэг-ol-приведите-примеры)
14. [Что представляет собой тэг h1..h6? Приведите примеры](#14-что-представляет-собой-тэг-h1h6-приведите-примеры)
15. [Что представляет собой тэг ul? Приведите примеры](#15-что-представляет-собой-тэг-ul-приведите-примеры)
16. [Что представляет собой тэг img? Приведите примеры](#16-что-представляет-собой-тэг-img-приведите-примеры)
17. [Что представляет собой технология Flexbox? Приведите примеры](#17-что-представляет-собой-технология-flexbox-приведите-примеры)
18. [Какие существуют способы применения Flexbox на веб-страницах? Приведите примеры](#18-какие-существуют-способы-применения-flexbox-на-веб-страницах-приведите-примеры)
19. [Приведите примеры свойств для работы со шрифтом](#19-приведите-примеры-свойств-для-работы-со-шрифтом)
20. [Что представляет собой каскадная таблица стилей? Приведите примеры](#20-что-представляет-собой-каскадная-таблица-стилей-приведите-примеры)
21. [Охарактеризуйте основные составляющие макета веб-страницы](#21-охарактеризуйте-основные-составляющие-макета-веб-страницы)
22. [Что представляет собой тэг head? Приведите примеры](#22-что-представляет-собой-тэг-head-приведите-примеры)
23. [Что представляет собой тэг hr? Приведите примеры](#23-что-представляет-собой-тэг-hr-приведите-примеры)
24. [Что представляет собой тэг body? Приведите примеры](#24-что-представляет-собой-тэг-body-приведите-примеры)
25. [Приведите примеры для использования прозрачности в CSS3](#25-приведите-примеры-для-использования-прозрачности-в-css3)
26. [Охарактеризуйте сущность медиа-запросов](#26-охарактеризуйте-сущность-медиа-запросов)
27. [Приведите примеры свойств для работы с блоками](#27-приведите-примеры-свойств-для-работы-с-блоками)
28. [Приведите примеры использования медиа-запросов на веб-странице](#28-приведите-примеры-использования-медиа-запросов-на-веб-странице)
29. [Какие способы существуют для применения стилей на веб-странице?](#29-какие-способы-существуют-для-применения-стилей-на-веб-странице)
30. [Практичекие задания](#практика)

# Ответы на вопросы:

### 1. Приведите примеры свойств для позиционирования в CSS:

#### Основные свойства:

- **`position`** — тип позиционирования, есть следующие значения:

  1. `static:`
     - Элемент позиционируется в нормальном потоке документа.
     - Свойства top, right, bottom, left и z-index не применяются.
     - Элемент отображается в том порядке, в котором он указан в HTML.
  2. `relative`
     - Элемент позиционируется относительно своего нормального положения в потоке документа.
     - Свойства top, right, bottom, left смещают элемент относительно его исходного положения.
     - Остальные элементы на странице не изменяют своего положения, как если бы этот элемент оставался на своем месте.
  3. `absolute`
     - Элемент удаляется из нормального потока документа и позиционируется относительно ближайшего позиционированного предка (родителя с position, отличным от static).
     - Если такого предка нет, элемент позиционируется относительно <body>.
     - Свойства top, right, bottom, left задают положение элемента относительно его контейнера.
  4. `fixed`
     - Элемент удаляется из нормального потока документа и позиционируется относительно окна браузера (viewport).
     - Элемент остается на одном и том же месте, даже если страница прокручивается.
     - Свойства top, right, bottom, left задают положение элемента относительно окна браузера.
  5. `sticky`
     - Элемент ведет себя как relative, пока не достигнет определенной точки прокрутки, после чего "прилипает" к указанному положению (как fixed).
     - Полезно для создания "липких" заголовков или навигационных панелей.

- **`top`**, **`right`**, **`bottom`**, **`left`** — смещение относительно краев.
- **`z-index`** — управление слоями (порядком наложения).

#### Примеры:

```css
.element {
  position: fixed;
  top: 0;
  left: 20px;
  z-index: 100;
}

.modal {
  position: absolute;
  bottom: 10%;
  right: 10%;
}
```

### 2. Приведите примеры свойств для работы с изображениями\*\*:

#### Основные свойства:

- **`width`** / **`height`** — размеры изображения.
- **`object-fit`** — заполнение контейнера (`cover`, `contain`, `fill`).
- **`object-position`** — выравнивание внутри контейнера (`top`, `center`).
- **`background-image`** — фоновое изображение.
- **`background-size`** — размер фона (`cover`, `50%`).

#### Примеры:

```css
img {
  width: 300px;
  height: 200px;
  object-fit: cover;
  object-position: center;
}

.banner {
  background-image: url("bg.jpg");
  background-size: cover;
}
```

### 3. Что представляет собой тэг `li`? Приведите примеры:

- Тэг `li` используется для обозначения элемента списка. Он может быть вложен в тэги `ul` (ненумерованный список) или `ol` (нумерованный список).

```html
<ul>
  <li>Пункт 1</li>
  <li>Пункт 2</li>
</ul>
<ol>
  <li>Элемент 1</li>
  <li>Элемент 2</li>
</ol>
```

### 4. Охарактеризуйте изученный набор свойств в технологии Grid. Приведите примеры:

#### Основные свойства:

1. **`display: grid`** — активирует Grid-контейнер.
2. **`grid-template-columns`** — задает количество и размер колонок (`1fr`, `repeat(3, 100px)`).
3. **`grid-template-rows`** — определяет размеры строк.
4. **`gap`** — расстояние между элементами (ранее `grid-gap`).
5. **`grid-column`** / **`grid-row`** — позиционирование элемента по колонкам/строкам.
6. **`grid-template-areas`** — именованные области для визуального макета.
7. **`justify-items`** / **`align-items`** — выравнивание содержимого внутри ячеек.

#### Примеры:

```css
/* Базовый Grid */
.container {
  display: grid;
  grid-template-columns: 1fr 2fr;
  grid-template-rows: 200px auto;
  gap: 15px;
}
/* Позиционирование элемента */
.item {
  grid-column: 1 / 3; /* Занимает колонки с 1 по 3(первая включается, а третья не включается, то есть элемент занимает первые две колонки) */
  grid-row: 2; /* Элемент размещается в строке 2 (второй ряд сетки). */
}
/* Именованные области */
.container {
  grid-template-areas:
    "header header"
    "sidebar content";
}
.header {
  grid-area: header;
}
.sidebar {
  grid-area: sidebar;
}
```

### 5. Что представляет собой тэг `table`? Приведите примеры:

- Тэг `table` используется для создания таблиц. Основные вложенные элементы:
  - `<tr>` — строка таблицы.
  - `<td>` — ячейка таблицы.
  - `<th>` — ячейка заголовка.

```html
<table border="1">
  <tr>
    <th>Имя</th>
    <th>Возраст</th>
  </tr>
  <tr>
    <td>Иван</td>
    <td>25</td>
  </tr>
</table>
```

### 6. Что представляет собой позиционирование в CSS? Приведите примеры:

Позиционирование в CSS — это механизм, который позволяет управлять расположением элементов на веб-странице. С помощью свойства `position` и дополнительных свойств (`top`, `right`, `bottom`, `left`, `z-index`) можно точно задать, где и как элемент будет отображаться относительно других элементов или окна браузера.

### Основные понятия:

1. **Нормальный поток документа**:

   - Элементы отображаются в том порядке, в котором они указаны в HTML.
   - Блоки (`block`) занимают всю доступную ширину и располагаются друг под другом.
   - Строчные элементы (`inline`) располагаются в строке, пока не закончится место.

2. **Позиционирование**:
   - Позволяет "вырвать" элемент из нормального потока и разместить его в нужном месте.
   - Используется для создания сложных макетов, наложения элементов, фиксации элементов на экране и т.д.


#### Пример

Элемент удаляется из нормального потока и позиционируется относительно окна браузера. Он остается на одном месте, даже если страница прокручивается.

```html
<div class="box fixed">Fixed</div>
<div class="box">Another Box</div>
```

```css
.fixed {
  position: fixed;
  top: 10px; /* 10px от верхнего края окна */
  right: 10px; /* 10px от правого края окна */
  background-color: lightpink;
}
```

### 7. Что представляет собой тэг `p`? Приведите примеры:

Тэг `p` используется для создания абзацев текста.

```html
<p>Это абзац текста.</p>
<p>Еще один абзац текста.</p>
```

### 8. Что представляет собой тэг `html`? Приведите примеры:

Тэг `html` — корневой элемент любого HTML-документа. Внутри него находятся теги `head` и `body`.

```html
<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Пример</title>
  </head>
  <body>
    <p>Контент страницы.</p>
  </body>
</html>
```

### 9. Что представляет собой тэг `a`? Приведите примеры:

Тэг `a` используется для создания гиперссылок.

```html
<a href="https://example.com">Ссылка на сайт</a>
<a href="#section1">Переход к разделу</a>
```

### 10. Перечислите этапы создания макета веб-страницы:

- `1 этап` создания макета - формирование разметки согласно техническому заданию, в результате мы получаем html документ
- `2 этап` - выбор технологии вёрстки:
  - Табличная верстка
  - Блочная вёрстка: адаптивная(flex, grid), неадаптивная(через свойство обтекания)
- `3 этап` - формирование каскадной таблица стилей
- `4 этап` - тестирование(проверка на различных браузерах)
- `5 этап` - отладка

### 11. Что представляет собой тэг `br`? Приведите примеры:

Тэг `br` используется для переноса строки в тексте. Это одиночный тэг.

```html
<p>Первая строка<br />Вторая строка</p>
```

### 12. В чем отличие между абсолютным и относительным позиционированием?

- **Абсолютное позиционирование (`absolute`)**: элемент позиционируется относительно ближайшего предка, у которого задано позиционирование (`relative`, `absolute`, `fixed`). Если такого предка нет, то относительно корневого элемента (`html`).
- **Относительное позиционирование (`relative`)**: элемент сдвигается относительно своего начального положения, оставаясь частью потока документа.

### 13. Что представляет собой тэг `ol`? Приведите примеры:

Тэг `ol` используется для создания упорядоченного (нумерованного) списка.

```html
<ol>
  <li>Первый элемент</li>
  <li>Второй элемент</li>
</ol>
```

### 14. Что представляет собой тэг `h1..h6`? Приведите примеры:

Тэги `h1`–`h6` используются для обозначения заголовков, где `h1` — самый важный (крупный), а `h6` — наименее важный (мелкий).

```html
<h1>Заголовок 1 уровня</h1>
<h2>Заголовок 2 уровня</h2>
<h6>Заголовок 6 уровня</h6>
```

### 15. Что представляет собой тэг `ul`? Приведите примеры:

Тэг `ul` используется для создания ненумерованных (маркированных) списков.

```html
<ul>
  <li>Элемент 1</li>
  <li>Элемент 2</li>
</ul>
```

### 16. Что представляет собой тэг `img`? Приведите примеры:

Тэг `img` используется для добавления изображений на веб-страницу. Основные атрибуты:

- `src` — путь к изображению.
- `alt` — альтернативный текст, отображаемый, если изображение не загрузилось.

```html
<img src="image.jpg" alt="Описание изображения" />
```

### 17. Что представляет собой технология Flexbox? Приведите примеры:

Flexbox (Flexible Box Layout) — это CSS-технология, позволяющая удобно размещать элементы в контейнере и управлять их расположением.

- Основное свойство: `display: flex`.
- Пример:

```css
.container {
  display: flex;
  justify-content: center; /* Выравнивание по горизонтали */
  align-items: center; /* Выравнивание по вертикали */
}
```

### 18. Какие существуют способы применения Flexbox на веб-страницах? Приведите примеры:

- Горизонтальное выравнивание элементов:

  ```css
  .container {
    display: flex;
    justify-content: space-between;
  }
  ```

- Вертикальное выравнивание:

  ```css
  .container {
    display: flex;
    align-items: center;
  }
  ```

- Создание адаптивных карточек:

  ```css
  .container {
    display: flex;
    flex-wrap: wrap;
  }
  ```

### 19. Приведите примеры свойств для работы со шрифтом:

#### Основные свойства:

1. **`font-family`** — семейство шрифта (например, `Arial, sans-serif`).
2. **`font-size`** — размер шрифта (`16px`, `1.2rem`).
3. **`font-weight`** — насыщенность (`normal`, `bold`, `700`).
4. **`font-style`** — стиль (`italic`, `normal`).
5. **`line-height`** — межстрочный интервал (`1.5`, `24px`).
6. **`text-transform`** — регистр (`uppercase`, `capitalize`).
7. **`@font-face`** — подключение кастомного шрифта.
8. **`font`** — шорткат для объединения свойств.

Желательно, но не обязательно(иожно забить):  
**`font-variant`** — выбор написания букв (`small-caps`).

Свойство `font-variant` определяет, как следует представлять строчные буквы - делать их все прописными уменьшенного размера или оставить без изменений.
Со значением small-caps все строчные буквы будут преобразованы в заглавные. При этом преобразованные заглавные буквы будут по размеру меньше, чем оригинальные заглавные буквы в тексте.

#### Примеры:

```css
/* Подключение шрифта */
@font-face {
  font-family: "CustomFont";
  src: url("font.woff2");
}

/* Применение свойств */
.text {
  font-family: "CustomFont", sans-serif;
  font-size: 18px;
  font-weight: bold;
  font-style: italic;
  line-height: 1.6;
  text-transform: uppercase;
}

/* Шорткат */
.title {
  font: italic 700 24px/1.2 "Arial";
}
```

### 20. Что представляет собой каскадная таблица стилей? Приведите примеры:

Каскадная таблица стилей (CSS) — это язык, который управляет внешним видом веб-страницы: её цветами, шрифтами, размерами элементов и другими аспектами.  
 Пример применения CSS:

```html
<style>
  body {
    background-color: lightblue;
    font-family: Arial, sans-serif;
  }
</style>
```

- Можно побольше свойств навалить

### 21. Охарактеризуйте основные составляющие макета веб-страницы:

- **Шапка (header)**: включает логотип, навигацию, контактную информацию.
- **Основная часть (main)**: содержит контент страницы — статьи, изображения, видео.
- **Боковая панель (sidebar)**: дополнительная информация, ссылки, виджеты.
- **Подвал (footer)**: контакты, ссылки на политику конфиденциальности, авторские права.

### 22. Что представляет собой тэг `head`? Приведите примеры:

Тэг `head` содержит метаинформацию о документе, такие как заголовок страницы, подключение стилей, скриптов.

```html
<head>
  <meta charset="UTF-8" />
  <title>Моя страница</title>
  <link rel="stylesheet" href="styles.css" />
</head>
```

### 23. Что представляет собой тэг `hr`? Приведите примеры:

Тэг `hr` используется для создания горизонтальной линии, которая визуально разделяет содержимое.

```html
<p>Текст выше линии</p>
<hr />
<p>Текст ниже линии</p>
```

### 24. Что представляет собой тэг `body`? Приведите примеры:

Тэг `body` содержит видимую часть веб-страницы: текст, изображения, видео, таблицы и т.д.

```html
<body>
  <h1>Заголовок</h1>
  <p>Это текст страницы</p>
</body>
```

### 25. Приведите примеры для использования прозрачности в CSS3:

#### Основные свойства:

1. **`opacity`** — прозрачность элемента (от `0` до `1`).
2. **`rgba()`** — прозрачность цвета (RGB + альфа-канал).
3. **`hsla()`** — прозрачность цвета (HSL + альфа-канал).
4. **`transparent`** — ключевое слово для полной прозрачности.

#### Примеры:

```css
/* Полупрозрачный элемент */
.element {
  opacity: 0.5;
}
/* Прозрачный фон */
.box {
  background-color: rgba(255, 0, 0, 0.3); /* Красный с 30% прозрачностью */
}
/* Прозрачный текст */
.text {
  color: hsla(120, 100%, 50%, 0.5); /* Зеленый с 50% прозрачностью */
}
/* Прозрачная граница */
.border {
  border: 2px solid transparent;
}
```

### 26. Охарактеризуйте сущность медиа-запросов:

Медиа-запросы позволяют применять стили в зависимости от характеристик устройства (размер экрана, разрешение и т.д.).  
 Пример:

```css
@media (max-width: 600px) {
  body {
    background-color: lightgray;
  }
}
```

### 27. Приведите примеры свойств для работы с блоками:

- `margin` — внешние отступы.
- `padding` — внутренние отступы.
- `border` — рамка вокруг элемента.
- `display` — определяет поведение элемента (`block`, `inline-block`, `none`).
- `width`, `height` — размеры блока.

#### Пример:

```html css
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Пример блоков</title>
    <style>
      .block {
        width: 150px;
        height: 80px;
        margin: 10px;
        padding: 5px;
        border: 1px solid black;
        background-color: lightblue;
      }
    </style>
  </head>
  <body>
    <div class="block">Пример блока</div>
  </body>
</html>
```

### 28. Приведите примеры использования медиа-запросов на веб-странице:

Позволяет блоку растягиваться, если экран шире 768px

```css
@media (min-width: 768px) {
  .menu {
    display: flex;
  }
}
```

Делает блок статичным при ширине менее 767px

```css
@media (max-width: 767px) {
  .menu {
    display: block;
  }
}
```
Проверка на возвоможность наводить курсор (`hover`), проверка типа курсора (`pointer`) и проверка плотности пикселей(`min-resolution`)
```css
@media (hover: none) { /*возможности наводить курсор нет*/
  .element {
    background-color: darkblue;
  }
}

@media (poiner: fine) { /*точное указывающие устройство*/
  .header {
    color: yellow;
  }
}

@media (min-resolution: 192dpi) {
  .element {
    background-color: orange;
  }
}
```

### 29. Какие способы существуют для применения стилей на веб-странице?

- **Встроенные стили**: в атрибуте `style` элемента.

  ```html
  <p style="color: red;">Красный текст</p>
  ```

- **Внутренние стили**: в теге `<style>` внутри `<head>`.

  ```html
  <style>
    p {
      color: blue;
    }
  </style>
  ```

- **Внешние стили**: в отдельном CSS-файле, подключённом через `<link>`.
  ```html
  <link rel="stylesheet" href="styles.css" />
  ```

## Практика
Предполагаемые задания:
1) Макет веб-страницы с использованием float
2) Макет веб-страницы с использованием flex
3) Макет веб-страницы с использованием grid

Примеры есть в lab/2024-2025/examplesPractic   

НЕ ФАКТ ЧТО ТАКОЕ БУДЕТ НА ЭКЗАМЕНЕ!!!