# WEB PROGRAMMING 1
## Bina Sarana Informatika (BSI)

Repositori ini merupakan kumpulan tugas dan pembelajaran untuk mata kuliah **Web Programming 1** di Bina Sarana Informatika (BSI), Semester 2.

---

## 📚 Daftar Isi
- [Deskripsi](#deskripsi)
- [Struktur Folder](#struktur-folder)
- [Topik Pembelajaran](#topik-pembelajaran)
- [Petunjuk Penggunaan](#petunjuk-penggunaan)

---

## 🎯 Deskripsi

Mata kuliah **Web Programming 1** adalah mata kuliah dasar yang mempelajari teknologi web fundamental meliputi:
- **HTML** - Struktur dan markup halaman web
- **CSS** - Styling dan layout (termasuk Bootstrap)
- **JavaScript** - Interaktivitas dan logika client-side
- **PHP** - Server-side programming

---

## 📂 Struktur Folder

```
CODING/
├── wp1-06-april-2026/
│   ├── bootstrap/
│   │   ├── sample.html
│   │   └── bootstrap/
│   │       ├── css/
│   │       └── js/
│   ├── experiment/
│   │   └── lang.html
│   ├── html/
│   │   ├── button.html
│   │   ├── checkbox.html
│   │   ├── form.html
│   │   └── select.html
│   └── php/
│
├── wp2-13-april-2026/
│   ├── contoh1.html
│   ├── html/
│   │   └── table.html
│   └── javascript/
│       └── index.html
│
└── README.md
```

---

## 📖 Topik Pembelajaran

### **wp1-06-april-2026** (Pembelajaran Minggu 1)

#### 🎨 Bootstrap Framework
- **File:** `bootstrap/sample.html`
- **Topik:** Pengenalan Bootstrap framework
- **Isi:** Example dasar penggunaan Bootstrap CSS dan JavaScript
- **Konten:** Hero section dengan heading dan framework integration

#### 🧪 Experiment
- **File:** `experiment/lang.html`
- **Topik:** Eksperimen dengan berbagai fitur HTML
- **Isi:** Percobaan awal dengan markup

#### 📝 HTML Elements Dasar

##### Button
- **File:** `html/button.html`
- **Topik:** HTML Form Button
- **Isi:** Demonstrasi berbagai jenis tombol dalam form HTML

##### Checkbox
- **File:** `html/checkbox.html`
- **Topik:** HTML Form Checkbox
- **Isi:** Input tipe checkbox untuk multiple selection

##### Form
- **File:** `html/form.html`
- **Topik:** HTML Form Radio Dasar
- **Isi:** Form elements dengan radio buttons dan buttons
- **Struktur:**
  ```html
  <form>
    <input type="button" /> - Tombol untuk form
    <input type="radio" />  - Radio button untuk pemilihan
    <br />                   - Line break
  </form>
  ```

##### Select
- **File:** `html/select.html`
- **Topik:** HTML Form Select/Dropdown
- **Isi:** Dropdown list untuk form selection

#### 🐘 PHP
- **Folder:** `php/`
- **Topik:** Dasar-dasar PHP (persiapan untuk server-side programming)

---

### **wp2-13-april-2026** (Pembelajaran Minggu 2)

#### 📋 HTML Table
- **File:** `html/table.html`
- **Topik:** HTML Table Element
- **Isi:** Struktur tabel dengan rows dan columns
- **Fungsi:** Untuk menampilkan data terstruktur dalam bentuk tabel

#### 📄 Contoh HTML
- **File:** `contoh1.html`
- **Topik:** Template HTML dasar
- **Isi:** Struktur HTML skeleton dengan meta tags

#### 🔧 JavaScript Basics
- **File:** `javascript/index.html`
- **Topik:** Pengenalan JavaScript
- **Isi:**
  ```javascript
  var titleElement = document.querySelector(".title");
  titleElement.textContent = "Welcome to JavaScript!";
  
  function showMessage() {
    alert("Hello, this is a message from JavaScript!");
  }
  ```
- **Konsep:**
  - DOM Selection dengan `querySelector()`
  - Mengubah element content
  - Function definition
  - Event handling dengan `onclick`
  - `alert()` untuk menampilkan dialog

---

## 🚀 Petunjuk Penggunaan

### Membuka File Lokal
Setiap file `.html` dapat dibuka langsung di browser:

1. **Metode 1: Drag & Drop**
   - Buka file explorer
   - Drag file `.html` ke browser

2. **Metode 2: Right Click → Open With**
   - Klik kanan file `.html`
   - Pilih "Open With" → Browser

3. **Metode 3: Terminal**
   ```bash
   # macOS
   open file.html
   
   # Linux
   xdg-open file.html
   
   # Windows
   start file.html
   ```

### Menggunakan Live Server (Recommended)
Untuk development yang lebih baik, gunakan Live Server extension:

1. Install [Live Server extension](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer) di VS Code
2. Klik kanan file `.html`
3. Pilih "Open with Live Server"

### Dengan PHP (untuk file yang memerlukan server)
Jika ada file PHP, jalankan:
```bash
php -S localhost:8000
```
Kemudian akses di browser: `http://localhost:8000`

---

## 💡 Konsep Penting

### HTML
- **Semantic tags:** `<header>`, `<main>`, `<footer>`
- **Form elements:** `<input>`, `<button>`, `<select>`, `<textarea>`
- **Accessibility:** `<label>`, `<title>`, `meta` tags

### CSS & Bootstrap
- Bootstrap grid system
- Responsive design
- Pre-built components

### JavaScript
- **DOM Manipulation:** Mengubah HTML element
- **Type System:** Return types seperti `void` (tidak mengembalikan nilai)
- **Event Handling:** `onclick`, `addEventListener()`
- **Functions:** Reusable code blocks

### PHP
- Server-side scripting
- Database interaction (akan dipelajari lebih lanjut)

---

## 📌 Catatan Penting

- File `.html` adalah file statis yang bisa dibuka langsung di browser
- File `.php` memerlukan PHP server untuk berjalan
- Bootstrap files sudah ter-include dalam folder untuk offline usage
- Setiap file merupakan independent unit yang bisa dipelajari sendiri

---

## 📝 Lisensi

Materi pembelajaran dari BSI - Bina Sarana Informatika

---

## ✨ Author

Pembelajaran Pribadi - Web Programming 1 - BSI  
**Tanggal:** April 2026

---

## 🔗 Referensi

- [HTML Documentation](https://developer.mozilla.org/en-US/docs/Web/HTML)
- [CSS Documentation](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [JavaScript Documentation](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [Bootstrap Framework](https://getbootstrap.com/)
- [PHP Documentation](https://www.php.net/)

---

**Happy Coding! 🎉**
