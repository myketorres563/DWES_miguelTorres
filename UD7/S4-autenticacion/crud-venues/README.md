### 1.-Instalmos api:

`phpartisaninstall:api`

### 2-.Añadimos HasApiTokens al modelo

![1770803078227](image/README/1770803078227.png)

### 3.-Creamos modelo + mmigración + factory + seeder

`phpartisanmake:modelEventVenue-mfs`

### 4.-Editamos la migración, el modelo, el factory, el seeder y el databaseseeder

![1770803297935](image/README/1770803297935.png)

`Ejecutamos php artisan migrate`

![1770803468986](image/README/1770803468986.png)

![1770803527503](image/README/1770803527503.png)

![1770803627589](image/README/1770803627589.png)

`Ejecutamos php artisan db:seed`

### 5.- Creamos AuthController y lo editamos

`php artisan make:controller Api/V1/AuthController`

![1770804053256](image/README/1770804053256.png)

### 6.-Creamos Requests y las editamos

`phpartisanmake:requestStoreEventVenueRequest phpartisanmake:requestUpdateEventVenueRequest`

![1770804446221](image/README/1770804446221.png)

![1770804482160](image/README/1770804482160.png)

### 7.-Creamos el controlador API y lo editamos

`phpartisanmake:controllerApi/V1/EventVenueController--api`

![1770804639576](image/README/1770804639576.png)

### 8.-Editamos las routas en routes/api.php

![1770804741383](image/README/1770804741383.png)
