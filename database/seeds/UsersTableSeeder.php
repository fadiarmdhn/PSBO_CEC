<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Customer;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'manajemen-produk']);
        Permission::create(['name' => 'menjalankan-transaksi']);
        Permission::create(['name' => 'manajemen-order']);
        Permission::create(['name' => 'manajemen-user']);
        $role = Role::create(['name' => 'siswacec']);
        $role->givePermissionTo('manajemen-produk', 'menjalankan-transaksi');
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('manajemen-order', 'manajemen-user', 'manajemen-produk', 'menjalankan-transaksi');
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@cec.id',
            'password' => bcrypt('secret'),
            'status' => true
        ]);
        $user->assignRole('admin');
        Customer::create(['nis' => 171807001, 'name' => 'AFIF NIKOLAS ZAKARYYA', 'grade' => 9]);
        Customer::create(['nis' => 171807002, 'name' => 'AHMAD CHOIRI', 'grade' => 9]);
        Customer::create(['nis' => 171807003, 'name' => 'AHMAD DAFI', 'grade' => 9]);
        Customer::create(['nis' => 171807004, 'name' => 'AHMAD MAULANA ISHAQ', 'grade' => 9]);
        Customer::create(['nis' => 171807005, 'name' => 'AKBAR BAIHAQI RAMADHAN', 'grade' => 9]);
        Customer::create(['nis' => 171807006, 'name' => 'AMMAR ABDULLAH ARIEF', 'grade' => 9]);
        Customer::create(['nis' => 171807007, 'name' => 'AWWALUL RIZKI FAUZI', 'grade' => 9]);
        Customer::create(['nis' => 171807008, 'name' => 'DHAFFA ELTA MUHARSYA', 'grade' => 9]);
        Customer::create(['nis' => 171807009, 'name' => 'DIMAS ABDAD ZUHAIR', 'grade' => 9]);
        Customer::create(['nis' => 171807010, 'name' => 'FARIZ ABYAN', 'grade' => 9]);
        Customer::create(['nis' => 171807011, 'name' => 'FAUZAN NAUFAL  RIDHWAN', 'grade' => 9]);
        Customer::create(['nis' => 171807012, 'name' => 'GILANG RHISNALDY', 'grade' => 9]);
        Customer::create(['nis' => 171807013, 'name' => 'MIFTAH FAHRUZAMAN', 'grade' => 9]);
        Customer::create(['nis' => 171807014, 'name' => 'MUHAMMAD FAQIH RASYIDIN', 'grade' => 9]);
        Customer::create(['nis' => 171807015, 'name' => 'MUHAMMAD FATIH HARIRI', 'grade' => 9]);
        Customer::create(['nis' => 171807016, 'name' => 'MUHAMMAD GHAZY AL AYYUBI', 'grade' => 9]);
        Customer::create(['nis' => 171807017, 'name' => 'MUHAMMAD IHSAN RAIS', 'grade' => 9]);
        Customer::create(['nis' => 171807018, 'name' => 'MUHAMMAD IQBAL KUSUMA PUTRA', 'grade' => 9]);
        Customer::create(['nis' => 171807019, 'name' => 'MUHAMMAD NAUFAL ZAKY', 'grade' => 9]);
        Customer::create(['nis' => 171807020, 'name' => 'MUHAMMAD NUR GHIYATS', 'grade' => 9]);
        Customer::create(['nis' => 171807021, 'name' => 'MUHAMMAD SYAHID FATHULLOH', 'grade' => 9]);
        Customer::create(['nis' => 171807022, 'name' => 'MUHAMMAD YAHYA AYYASH', 'grade' => 9]);
        Customer::create(['nis' => 171807023, 'name' => 'MUSYAFFA RISYAD AYYASY', 'grade' => 9]);
        Customer::create(['nis' => 171807024, 'name' => 'NAUFAL SENDI PRATAMA', 'grade' => 9]);
        Customer::create(['nis' => 171807025, 'name' => 'NIZAM NURAKMAL', 'grade' => 9]);
        Customer::create(['nis' => 171807026, 'name' => 'OKTAVIAN RIZKI RAMADHAN', 'grade' => 9]);
        Customer::create(['nis' => 171807027, 'name' => 'RONAL FEBI PUTRA', 'grade' => 9]);
        Customer::create(['nis' => 171807028, 'name' => 'SABIL AKMAL MUZAKKI', 'grade' => 9]);
        Customer::create(['nis' => 171807029, 'name' => 'MUHAMAD FIRMAN RAMDAN JAELANI', 'grade' => 9]);
        Customer::create(['nis' => 171807030, 'name' => 'YOSEP TRESNA SAEPULOH', 'grade' => 9]);
        Customer::create(['nis' => 181907001, 'name' => 'Abdillah Maulana Azizi', 'grade' => 8]);
        Customer::create(['nis' => 181907002, 'name' => 'Aji Setiawan', 'grade' => 8]);
        Customer::create(['nis' => 181907003, 'name' => 'Alhanif Waluyo Abdullatip', 'grade' => 8]);
        Customer::create(['nis' => 181907004, 'name' => 'Alif Hidayatullah', 'grade' => 8]);
        Customer::create(['nis' => 181907005, 'name' => 'Alif Muhammad Rizan', 'grade' => 8]);
        Customer::create(['nis' => 181907006, 'name' => 'Alif Trinugraha Suparto', 'grade' => 8]);
        Customer::create(['nis' => 181907007, 'name' => 'Aulia Rahman M', 'grade' => 8]);
        Customer::create(['nis' => 181907008, 'name' => 'Aziz Asyadicky', 'grade' => 8]);
        Customer::create(['nis' => 181907009, 'name' => 'Dzikri Lisaana Sidqi', 'grade' => 8]);
        Customer::create(['nis' => 181907010, 'name' => 'Fakhri Nur Hakim', 'grade' => 8]);
        Customer::create(['nis' => 181907011, 'name' => 'Farez De Sabrino', 'grade' => 8]);
        Customer::create(['nis' => 181907012, 'name' => 'Galang Sheva Harys Maulana', 'grade' => 8]);
        Customer::create(['nis' => 181907013, 'name' => 'Ikhwan Nur Hakim', 'grade' => 8]);
        Customer::create(['nis' => 181907014, 'name' => 'Jaysu Muhammad Elfaruqy', 'grade' => 8]);
        Customer::create(['nis' => 181907015, 'name' => 'M Miftahul Huda', 'grade' => 8]);
        Customer::create(['nis' => 181907016, 'name' => 'M. Fadil Azila Arifin', 'grade' => 8]);
        Customer::create(['nis' => 181907017, 'name' => 'M. Taqiyuddin', 'grade' => 8]);
        Customer::create(['nis' => 181907018, 'name' => 'Muadz Syahrul Mubarok', 'grade' => 8]);
        Customer::create(['nis' => 181907019, 'name' => 'Muhamad Fajar Ath-Thariq', 'grade' => 8]);
        Customer::create(['nis' => 181907020, 'name' => 'Muhammad Antoni', 'grade' => 8]);
        Customer::create(['nis' => 181907021, 'name' => 'Muhammad Fatihrahman Rauf', 'grade' => 8]);
        Customer::create(['nis' => 181907022, 'name' => 'Muhammad Fikri Fasa Graha H', 'grade' => 8]);
        Customer::create(['nis' => 181907023, 'name' => 'Muhammad Hafiz', 'grade' => 8]);
        Customer::create(['nis' => 181907024, 'name' => 'Muhammad Shidiq', 'grade' => 8]);
        Customer::create(['nis' => 181907025, 'name' => 'Muhammad Wildan Anugrah F', 'grade' => 8]);
        Customer::create(['nis' => 181907026, 'name' => 'Nabil Muhammad Azhar', 'grade' => 8]);
        Customer::create(['nis' => 181907027, 'name' => 'Rafli Alghifari', 'grade' => 8]);
        Customer::create(['nis' => 181907028, 'name' => 'Rasyiq Dzuhri', 'grade' => 8]);
        Customer::create(['nis' => 181907029, 'name' => 'Razy Du Ryer Khan', 'grade' => 8]);
        Customer::create(['nis' => 181907030, 'name' => 'Ridho Aulia Rahman', 'grade' => 8]);
        Customer::create(['nis' => 181907031, 'name' => 'Rifki Al Bais', 'grade' => 8]);
        Customer::create(['nis' => 181907032, 'name' => 'Sariman', 'grade' => 8]);
        Customer::create(['nis' => 192007001, 'name' => 'ABDUL MUTHOLIB S KOSWARA', 'grade' => 7]);
        Customer::create(['nis' => 192007002, 'name' => 'AHMAD FAIQ', 'grade' => 7]);
        Customer::create(['nis' => 192007003, 'name' => 'AHMAD FAJRI ABDI', 'grade' => 7]);
        Customer::create(['nis' => 192007004, 'name' => 'AHMAD FARHAN', 'grade' => 7]);
        Customer::create(['nis' => 192007005, 'name' => 'AHMAD HOTIMI', 'grade' => 7]);
        Customer::create(['nis' => 192007006, 'name' => 'AHMAD WIDAAD KAMALI', 'grade' => 7]);
        Customer::create(['nis' => 192007007, 'name' => 'ANGGI ADITIA', 'grade' => 7]);
        Customer::create(['nis' => 192007008, 'name' => 'DIAZ BAMBANG PURWADI', 'grade' => 7]);
        Customer::create(['nis' => 192007009, 'name' => 'FAJAR TRI UTOMO', 'grade' => 7]);
        Customer::create(['nis' => 192007010, 'name' => 'FARHAN AGUSTIAN', 'grade' => 7]);
        Customer::create(['nis' => 192007011, 'name' => 'HUSAIN ATH-THOHIRI', 'grade' => 7]);
        Customer::create(['nis' => 192007012, 'name' => 'INSAN SEPTIAN', 'grade' => 7]);
        Customer::create(['nis' => 192007013, 'name' => 'M INDRA SAPUTRA', 'grade' => 7]);
        Customer::create(['nis' => 192007014, 'name' => 'MOHAMMAD AKBAR HAYKAL PONTOH', 'grade' => 7]);
        Customer::create(['nis' => 192007015, 'name' => 'MUHAMAD RASHAD FIKRI HIDAYAT', 'grade' => 7]);
        Customer::create(['nis' => 192007016, 'name' => 'MUHAMMAD ARIF RAHMAN', 'grade' => 7]);
        Customer::create(['nis' => 192007017, 'name' => 'MUHAMMAD CAHYA NABIL', 'grade' => 7]);
        Customer::create(['nis' => 192007018, 'name' => 'MUHAMMAD FAKI', 'grade' => 7]);
        Customer::create(['nis' => 192007019, 'name' => 'MUHAMMAD FARIS ASSIDIQ', 'grade' => 7]);
        Customer::create(['nis' => 192007020, 'name' => 'MUHAMMAD HANIF MUSALLAM', 'grade' => 7]);
        Customer::create(['nis' => 192007021, 'name' => 'MUHAMMAD SYAUQI ASHARI', 'grade' => 7]);
        Customer::create(['nis' => 192007022, 'name' => 'NAZRIL AHMAD FAHREZI TINUNGKI', 'grade' => 7]);
        Customer::create(['nis' => 192007023, 'name' => 'TEUNGKU SYAIHAN ABDULLAH', 'grade' => 7]);
        Customer::create(['nis' => 192007024, 'name' => 'QIAN SANTANG SAYYAFULLAH', 'grade' => 7]);
        Customer::create(['nis' => 192007025, 'name' => 'RAIHAN NAFIQ BUGIS', 'grade' => 7]);
        Customer::create(['nis' => 192007026, 'name' => 'RAYHAN IBADUROHMAN AL GHOZY', 'grade' => 7]);
        Customer::create(['nis' => 192007027, 'name' => 'RICARDO DE GUCCI', 'grade' => 7]);
        Customer::create(['nis' => 192007028, 'name' => 'RIZKY SALIM MUHARAM', 'grade' => 7]);
        Customer::create(['nis' => 192007029, 'name' => 'SAYYID RAFIQ ALJUFFAR', 'grade' => 7]);
        Customer::create(['nis' => 192007030, 'name' => 'UWWAYS SULQORNI', 'grade' => 7]);
        Customer::create(['nis' => 192007031, 'name' => 'VICKY FEBRIAN', 'grade' => 7]);
        Customer::create(['nis' => 192007032, 'name' => 'ZAIDAN RAMADHAN', 'grade' => 7]);
        Customer::create(['nis' => 171807031, 'name' => 'AGISNA SALSABILA', 'grade' => 9]);
        Customer::create(['nis' => 171807032, 'name' => 'ALIYYAH NURAINI SHAFIYAH PUTRI S', 'grade' => 9]);
        Customer::create(['nis' => 171807033, 'name' => 'ALYA KHOIRUNNISA', 'grade' => 9]);
        Customer::create(['nis' => 171807034, 'name' => 'ANA AUFA HANIFAH', 'grade' => 9]);
        Customer::create(['nis' => 171807035, 'name' => 'ANDHINI ADESTYA PURNAMA', 'grade' => 9]);
        Customer::create(['nis' => 171807036, 'name' => 'ARSELA KAMALIA AZZAHRA', 'grade' => 9]);
        Customer::create(['nis' => 171807037, 'name' => 'AULIA QURROTA AYUNI', 'grade' => 9]);
        Customer::create(['nis' => 171807038, 'name' => 'AURA CINTA ARRAHMAN', 'grade' => 9]);
        Customer::create(['nis' => 171807039, 'name' => 'DEA NOVITA', 'grade' => 9]);
        Customer::create(['nis' => 171807040, 'name' => 'FITRI RAHMAWATI SYAWAL', 'grade' => 9]);
        Customer::create(['nis' => 171807041, 'name' => 'FITRIA', 'grade' => 9]);
        Customer::create(['nis' => 171807042, 'name' => 'GHINA MEISA FARIDA NENGSIH', 'grade' => 9]);
        Customer::create(['nis' => 171807043, 'name' => 'HANIFAH KHAIRUNNISA', 'grade' => 9]);
        Customer::create(['nis' => 171807044, 'name' => 'MSY. SITI NUR FATHIAH', 'grade' => 9]);
        Customer::create(['nis' => 171807045, 'name' => 'NABILAH PUTRI LUBAY', 'grade' => 9]);
        Customer::create(['nis' => 171807046, 'name' => 'NAILA RAHMA MAULIDA', 'grade' => 9]);
        Customer::create(['nis' => 171807047, 'name' => 'NAISYA AULIA SYIFA', 'grade' => 9]);
        Customer::create(['nis' => 171807048, 'name' => 'NAZWA RAFALIA PUTRI', 'grade' => 9]);
        Customer::create(['nis' => 171807049, 'name' => 'NUR ANISA', 'grade' => 9]);
        Customer::create(['nis' => 171807050, 'name' => 'PUSPITA', 'grade' => 9]);
        Customer::create(['nis' => 171807051, 'name' => 'PUTRI ANGELINA LUBIS', 'grade' => 9]);
        Customer::create(['nis' => 171807052, 'name' => 'RIANA AMEERAH', 'grade' => 9]);
        Customer::create(['nis' => 171807053, 'name' => 'SALMA FATIMAH', 'grade' => 9]);
        Customer::create(['nis' => 171807054, 'name' => 'SALSABILA ALIPIA RAHMA', 'grade' => 9]);
        Customer::create(['nis' => 171807055, 'name' => 'SYAFIRA SETIANTI', 'grade' => 9]);
        Customer::create(['nis' => 171807056, 'name' => 'SYARAH IZZATI', 'grade' => 9]);
        Customer::create(['nis' => 171807057, 'name' => 'WASIKOH', 'grade' => 9]);
        Customer::create(['nis' => 171807058, 'name' => 'ZAHRA MUSTAFIDA', 'grade' => 9]);
        Customer::create(['nis' => 171807059, 'name' => 'ERINA', 'grade' => 9]);
        Customer::create(['nis' => 171807060, 'name' => 'JULIANTI', 'grade' => 9]);
        Customer::create(['nis' => 181907033, 'name' => 'Amah Robbaniyyah', 'grade' => 8]);
        Customer::create(['nis' => 181907034, 'name' => 'Ana Nurjanah', 'grade' => 8]);
        Customer::create(['nis' => 181907035, 'name' => 'Annisa', 'grade' => 8]);
        Customer::create(['nis' => 181907036, 'name' => 'Asma Qonita', 'grade' => 8]);
        Customer::create(['nis' => 181907037, 'name' => 'Azizah Indah Setiawan', 'grade' => 8]);
        Customer::create(['nis' => 181907038, 'name' => 'Cindy Aulia Sari', 'grade' => 8]);
        Customer::create(['nis' => 181907039, 'name' => 'Difa Aurelia Agustin', 'grade' => 8]);
        Customer::create(['nis' => 181907040, 'name' => 'Early Nayla Putri', 'grade' => 8]);
        Customer::create(['nis' => 181907041, 'name' => 'Elsya Najmi Dziaul Haq', 'grade' => 8]);
        Customer::create(['nis' => 181907042, 'name' => 'Fadla Noviza Auilia', 'grade' => 8]);
        Customer::create(['nis' => 181907043, 'name' => 'Ghina Aliya', 'grade' => 8]);
        Customer::create(['nis' => 181907044, 'name' => 'Ghina Zulfa Aulia', 'grade' => 8]);
        Customer::create(['nis' => 181907045, 'name' => 'Hildana Salsabila Rustam', 'grade' => 8]);
        Customer::create(['nis' => 181907046, 'name' => 'Kamila Lutfiyyah Addausi', 'grade' => 8]);
        Customer::create(['nis' => 181907047, 'name' => 'Keisha Sulfa Al-Mutsawa', 'grade' => 8]);
        Customer::create(['nis' => 181907048, 'name' => 'Khoirunnisa', 'grade' => 8]);
        Customer::create(['nis' => 181907049, 'name' => 'Laura Ramadhona Pefi', 'grade' => 8]);
        Customer::create(['nis' => 181907050, 'name' => 'Miftah Nur Jannah', 'grade' => 8]);
        Customer::create(['nis' => 181907051, 'name' => 'Mutiara Sakinah', 'grade' => 8]);
        Customer::create(['nis' => 181907052, 'name' => 'Nadya Nadziifah', 'grade' => 8]);
        Customer::create(['nis' => 181907053, 'name' => 'Neng Lila Fadilah', 'grade' => 8]);
        Customer::create(['nis' => 181907054, 'name' => 'Nurazizah', 'grade' => 8]);
        Customer::create(['nis' => 181907055, 'name' => 'Nursyiah Laane', 'grade' => 8]);
        Customer::create(['nis' => 181907056, 'name' => 'Putri Mayang Sari', 'grade' => 8]);
        Customer::create(['nis' => 181907057, 'name' => 'Sarah Al Zajirah', 'grade' => 8]);
        Customer::create(['nis' => 181907058, 'name' => 'Shifa Dhyaa Martiza', 'grade' => 8]);
        Customer::create(['nis' => 181907059, 'name' => 'Trisna Mutiara Mulyaningsih', 'grade' => 8]);
        Customer::create(['nis' => 181907060, 'name' => 'Ulfany Dasril', 'grade' => 8]);
        Customer::create(['nis' => 181907061, 'name' => 'Wafiq Azizah', 'grade' => 8]);
        Customer::create(['nis' => 181907062, 'name' => 'Zarifa Dealova Rahma', 'grade' => 8]);
        Customer::create(['nis' => 181907063, 'name' => 'Zhafirah Chairunnisa', 'grade' => 8]);
        Customer::create(['nis' => 181907064, 'name' => 'Zhelanda Anisa Longdong', 'grade' => 8]);
        Customer::create(['nis' => 192007033, 'name' => 'AIDA NAILAL HUSNA', 'grade' => 7]);
        Customer::create(['nis' => 192007034, 'name' => 'AISYAH RAIHANA IZZANI', 'grade' => 7]);
        Customer::create(['nis' => 192007035, 'name' => 'AMARTHA SYIFAUMARHAMAH', 'grade' => 7]);
        Customer::create(['nis' => 192007036, 'name' => 'ANGGELA AGUSTIN', 'grade' => 7]);
        Customer::create(['nis' => 192007037, 'name' => 'ARIFA MUTIARA RAMADHANI', 'grade' => 7]);
        Customer::create(['nis' => 192007038, 'name' => 'ASMA HURIN AL HUSNA', 'grade' => 7]);
        Customer::create(['nis' => 192007039, 'name' => 'AUFA ASHFIA ASH SHATILA', 'grade' => 7]);
        Customer::create(['nis' => 192007040, 'name' => 'AZIZAH NURUL MUKMINAH', 'grade' => 7]);
        Customer::create(['nis' => 192007041, 'name' => 'AZKIYA SABILA QONITA', 'grade' => 7]);
        Customer::create(['nis' => 192007042, 'name' => 'BELLA AMELIA PUTRI', 'grade' => 7]);
        Customer::create(['nis' => 192007043, 'name' => 'CANTIKA NASYA ANANDHITA', 'grade' => 7]);
        Customer::create(['nis' => 192007044, 'name' => 'FARIZA ISNAINI AFDALIA', 'grade' => 7]);
        Customer::create(['nis' => 192007045, 'name' => 'FATIMAH AZZAHRA', 'grade' => 7]);
        Customer::create(['nis' => 192007046, 'name' => 'FAUZIYAH AFIFAH HIKMAH', 'grade' => 7]);
        Customer::create(['nis' => 192007047, 'name' => 'KABILA QUEENDA', 'grade' => 7]);
        Customer::create(['nis' => 192007048, 'name' => 'KAILA PADMARINI HASBY', 'grade' => 7]);
        Customer::create(['nis' => 192007049, 'name' => 'KEYSA FARANI', 'grade' => 7]);
        Customer::create(['nis' => 192007050, 'name' => 'KHAIRANI IZZATUL HAMDANI', 'grade' => 7]);
        Customer::create(['nis' => 192007051, 'name' => 'LARAS APRILIYANI', 'grade' => 7]);
        Customer::create(['nis' => 192007052, 'name' => 'MUTIA KIRAINA TSABITA', 'grade' => 7]);
        Customer::create(['nis' => 192007053, 'name' => 'MUTIARA PUTRI RAHAYU', 'grade' => 7]);
        Customer::create(['nis' => 192007054, 'name' => 'NAJMI ZAHIYYANZARQA', 'grade' => 7]);
        Customer::create(['nis' => 192007055, 'name' => 'NAUROTUN NADA', 'grade' => 7]);
        Customer::create(['nis' => 192007056, 'name' => 'NURI ZAHRA SHOLEHAH', 'grade' => 7]);
        Customer::create(['nis' => 192007057, 'name' => 'NURUL FAJRIYAH', 'grade' => 7]);
        Customer::create(['nis' => 192007058, 'name' => 'RIZKYA MUTIARA RANI', 'grade' => 7]);
        Customer::create(['nis' => 192007059, 'name' => 'RUFAIDAH KHAIRANI', 'grade' => 7]);
        Customer::create(['nis' => 192007060, 'name' => 'SERLY SONDARI', 'grade' => 7]);
        Customer::create(['nis' => 192007061, 'name' => 'SHAFA SEPTRIASA YULIAN', 'grade' => 7]);
        Customer::create(['nis' => 192007062, 'name' => 'SYASKA ANANDARONA AZZANIAR', 'grade' => 7]);
        Customer::create(['nis' => 192007063, 'name' => 'YAYU MALIKA SEPTRIASA', 'grade' => 7]);
        Customer::create(['nis' => 192007064, 'name' => 'ZAHRATUL WIRDI MUTMAINNA', 'grade' => 7]);
    }
}