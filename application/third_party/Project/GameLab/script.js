// Modul Array
// var nilai = [84, 92, 76, 81, 52];
// var jmlSiswa = nilai.length;

// var totalNilai = 0;

// for (let siswa = 0; siswa < jmlSiswa; ++siswa){
//     totalNilai += nilai[siswa];
// }

// var nilaiRata = totalNilai / jmlSiswa;
// console.log(nilaiRata);

// ====================
// Mencari nilai tertinggi
// var nilai = [84, 81, 56, 92, 76, 98, 72]
// var jmlSiswa = nilai.length

// var nilaiTinggi = 0
// var nilaiTotal = 0

// for(let siswa = 0; siswa< jmlSiswa; siswa++){
//     nilaiTotal += nilai[siswa];
//     if(nilai[siswa] > nilaiTinggi){
//         nilaiTinggi = nilai[siswa]
//     }
// }

// var nilaiRata = nilaiTotal / jmlSiswa

// document.write("Nilai tertinggi = "+nilaiTinggi)
// document.write("<br></br>")
// document.write("Nilai rata rata = "+nilaiRata)
// ===================

// for each array
// var fibonacchi = [0, 1, 1, 2, 3, 5, , 13, 21, 34, 55, 89]
// fibonacchi.forEach((data) => {
//     document.write(`data ke ${data}`)
// })
// ===================

let pengunjung = [];

function tambahPengunjung(nama, nomorAnggota, gender) {
  pengunjung.push({ nama, nomorAnggota, gender });
  console.log("Pengunjung berhasil ditambahkan.");
}

function tampilkanDaftarPengunjung() {
  if (pengunjung.length === 0) {
    console.log("Tidak ada pengunjung yang terdaftar.");
  } else {
    console.log("Daftar Pengunjung:");
    pengunjung.forEach((pengunjung, index) => {
      console.log(`\n${index + 1}. Nama: ${pengunjung.nama}`);
      console.log(`   Nomor Anggota: ${pengunjung.nomorAnggota}`);
      console.log(`   Gender: ${pengunjung.gender}`);
    });
  }
}

function keluarProgram() {
  console.log("Program telah keluar.");
  process.exit();
}

function tampilkanMenu() {
  console.log("\n--- MENU ---");
  console.log("1. Tambah Pengunjung");
  console.log("2. Tampilkan Daftar Pengunjung");
  console.log("3. Keluar Program");
}

function jalankanProgram() {
  while (true) {
    tampilkanMenu();
    const pilihan = prompt("Masukkan pilihan (1-3): ");

    switch (pilihan) {
      case "1":
        const nama = prompt("Masukkan nama: ");
        const nomorAnggota = prompt("Masukkan nomor anggota: ");
        const gender = prompt("Masukkan gender: ");
        tambahPengunjung(nama, nomorAnggota, gender);
        break;
      case "2":
        tampilkanDaftarPengunjung();
        break;
      case "3":
        keluarProgram();
        break;
      default:
        console.log("Pilihan tidak valid. Silakan coba lagi.");
    }
  }
}

jalankanProgram();