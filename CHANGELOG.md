## 1.0.0 (2020/09/30)
- Install laravel-dompdf `composer require barryvdh/laravel-dompdf`

## Installation
After updating composer, add the ServiceProvider to the providers array in config/app.php 
```
Barryvdh\DomPDF\ServiceProvider::class`
```

You can optionally use the facade for shorter code. Add this to your facades:
```
'PDF' => Barryvdh\DomPDF\Facade::class
```

## Using

You can create a new DOMPDF instance and load a HTML string, file or view name. You can save it to a file, or stream (show in browser) or download.

    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();
