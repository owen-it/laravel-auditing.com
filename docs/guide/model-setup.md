# Model Setup

Setting up a model for auditing is a breeze with OwenIt\Auditing. To get started, simply _use_ the `OwenIt\Auditing\Auditable` trait in the model you wish to audit and _implement_ the `OwenIt\Auditing\Contracts\Auditable` interface.

To install the package and all its dependencies, please refer to the [installation instructions](installation.md) available on our website. Once the package is installed, you can quickly and easily set up auditing for your Laravel application.

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    // ...
}
```

By default, the `Database` audit driver will be used.
If needed, you can also implement your own [Audit Driver](audit-drivers.md).
