# SimpleCSS

Imagine that learning SASS and LESS is like learning rocket science. This is like learning to count to five.

SimpleCSS is a micro-library work-in-progress. Currently it has two features:

1. Users can define variables.
2. Semi-colons not required.

That's it. In exactly 0.80kB, SimpleCSS allows a user to point a PHP file at a SimpleCSS file and then reference the PHP as their stylesheet instead.

This all boils down to one line of code:

```php
SimpleCSS($path);
```

Echo that line and you'll output the fixed CSS. So for a full setup, if you have the following directory:

```text
> site
  > style
    > main.css
    > master.php
  > index.html
```

Then your PHP function will be:

```php
SimpleCSS("main.css");
```

And your HTML link to CSS will be:

```html
<link rel="stylesheet" href="style/master.php" media="screen" title="no title" charset="utf-8">
```
