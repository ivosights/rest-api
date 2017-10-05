# REST API

CRUD Articles https://rest-api.r10.co/articles

## Fields
* title - required
* content - required
* created_at
* updated_at

### GET /articles
list articles
```json
{
    "status": true,
    "offset": 0,
    "limit": 25,
    "total": 4,
    "data": [{
        "id": 5,
        "title": "Perbaikan Tahap Dua Fokus pada Keselamatan Stabilitas",
        "content": "Perbaikan Jembatan Cisomang tahap kedua difokuskan pada peningkatan faktor keselamatan stabilitas. Hal itu dilakukan melalui penambahan jangkar tanah untuk menahan beban lateral dan fondasi berbentuk tabung (bored pile).",
        "created_at": "2017-04-05 01:28:12",
        "updated_at": "2017-04-05 01:28:12"
    }, {
        "id": 2,
        "title": "Sisi Positif di Balik Absennya Messi",
        "content": "Bintang sepakbola Argentina itu terpaksa hanya menyaksikan rekan-rekannya dari bangku penonton di pertandingan itu. Messi terkena sanksi skorsing otomatis usai menerima kartu kuning kelima di musim ini dalam pertandingan melawan Valencia sebelum jeda internasional",
        "created_at": "2017-04-05 00:32:29",
        "updated_at": "2017-04-05 00:32:29"
    }, {
        "id": 3,
        "title": "Warna-warni Jam Tangan Pintar Garmin",
        "content": "Garmin merilis seri Fenix 5 yang hadir dengan berbagai ukuran dan pilihan strap warna-warni. Seri ini sudah punya fitur GPS sebagai penunjang kegiatan outdoor.",
        "created_at": "2017-04-05 00:32:29",
        "updated_at": "2017-04-05 00:32:29"
    }, {
        "id": 4,
        "title": "iPhone 7 Kembali ke Indonesia",
        "content": "Ponsel pintar besutan Apple seri terbaru, yakni iPhone 7 dan iPhone 7 Plus, resmi menyambangi jaringan ritel resmi di Indonesia dengan penjualan serentak pada Jumat (31/3). Produk ini bisa tersedia setelah Apple lama terkendala terkait regulasi kandungan lokal",
        "created_at": "2017-04-04 18:21:28",
        "updated_at": "2017-04-04 18:21:28"
    }]
}
```


### GET /articles/:id
single article
```json
{
    "status": true,
    "data": {
        "id": 2,
        "title": "Sisi Positif di Balik Absennya Messi",
        "content": "Bintang sepakbola Argentina itu terpaksa hanya menyaksikan rekan-rekannya dari bangku penonton di pertandingan itu. Messi terkena sanksi skorsing otomatis usai menerima kartu kuning kelima di musim ini dalam pertandingan melawan Valencia sebelum jeda internasional",
        "created_at": "2017-04-05 00:32:29",
        "updated_at": "2017-04-05 00:32:29"
    }
}
```

### POST /articles
create article

### PUT /articles/:id
update article by id

### DELETE /articles/:id
delete article by id


# Install
* clone
* composer install
* import db (api.sql)[https://github.com/ivosights/rest-api/blob/master/api.sql]
* create env from (.env.example)[https://github.com/ivosights/rest-api/blob/master/.env.example]
