const express = require('express');
const bodyParser = require('body-parser');
const MongoClient = require('mongodb').MongoClient;

const app = express();
const port = 80; // Ganti port sesuai kebutuhan

// URL MongoDB Anda
const mongoURI = 'mongodb://localhost:27017'; // Ganti dengan URL MongoDB Anda
const dbName = 'produk'; // Ganti dengan nama database Anda

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public')); // Jika file HTML berada di folder 'public'

// Menyambungkan ke MongoDB
MongoClient.connect(mongoURI, { useUnifiedTopology: true }, (err, client) => {
  if (err) return console.error(err);
  console.log('Terhubung ke Database');

  const db = client.db(dbName);
  const collection = db.collection('tanaman'); // Ganti 'tanaman' dengan nama koleksi Anda

  app.post('/tambah-tanaman', (req, res) => {
    const tanaman = {
      nama: req.body.inputBuah,
      kategori: req.body.inputKategori,
      deskripsi: req.body.inputDeskripsi,
      persiapan_bibit: req.body.inputPersiapanbibit,
      penanaman: req.body.inputPenanaman,
      perawatan: req.body.inputPerawatan,
    };

    collection.insertOne(tanaman, (err, result) => {
      if (err) return console.error(err);
      console.log('Data berhasil disimpan ke MongoDB');
      res.redirect('/index.html'); // Ganti dengan halaman tujuan setelah menyimpan
    });
  });
});

app.listen(port, () => {
  console.log(`Server berjalan pada http://localhost:${port}`);
});
