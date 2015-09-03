# SimpleCSS

Imagine that learning SASS and LESS is like learning rocket science. This is like learning to count to five.

SimpleCSS is a micro-library work-in-progress. Currently it has two features:

1. Users can define variables.
2. Semi-colons not required.

That's it. In exactly 0.80kB, SimpleCSS allows a user to point a PHP file at a SimpleCSS file and then reference the PHP as their stylesheet instead.

##Implementation

This all boils down to one line of code:

```php
SimpleCSS($path);
```

##Example

The following shows you what your code would look like if you had the following structured directories:

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

##Demo

This is what it looks like pre-compiled:

```SASS
$orange = #E99B56
$yellow = #DBB96F
$bg-grey = #FAFAFA
$text-grey = #444
$sans-serif-stack = 'Roboto', 'Helvetica Neue', 'Helvetica', 'Arial', 'Sans-Serif'
$serif-stack = 'Harriet', 'Garamond', 'Georgia', 'Times New Roman', 'Serif'

body {
  margin: 0

  font-family: $sans-serif-stack
  font-style: normal
  font-size: 14pt
  font-weight: 300

  background-color: $bg-grey
  color: $text-grey
}

p,
i,
a {
  font-family: $sans-serif-stack
}
```

And this is what the compiled CSS looks like:

```SASS
body {
  margin: 0;

  font-family:  'Roboto', 'Helvetica Neue', 'Helvetica', 'Arial', 'Sans-Serif';
  font-style: normal;
  font-size: 14pt;
  font-weight: 300;

  background-color:  #FAFAFA;
  color:  #444;
}

p,
i,
a {
  font-family:  'Roboto', 'Helvetica Neue', 'Helvetica', 'Arial', 'Sans-Serif'
}
```

##Okay, now use it already...

It's shameful that I even wrote this much on something so simple.
