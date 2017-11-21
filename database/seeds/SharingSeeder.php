<?php

use Illuminate\Database\Seeder;

class SharingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Ort')->delete();
        DB::table('AMarke')->delete();
        DB::table('Kraftstoff')->delete();
        DB::table('Baujahr')->delete();


        // INSERTS FÜR ORTE
        DB::insert("INSERT INTO Ort VALUES (1, 'Deutschland', NOW(), NOW())");

        //INSERT FÜR AMarke
        DB::insert("INSERT INTO AMarke VALUES (1, 'Alfa Romeo', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (2, 'Aston Martin', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (3, 'Audi', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (4, 'Bentley', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (5, 'BMW', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (6, 'Bugatti', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (7, 'Chevrolet', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (8, 'Corvette', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (9, 'Dacia', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (10, 'Dodge', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (11, 'Ferrari', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (12, 'Fiat', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (13, 'Ford', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (14, 'Honda', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (15, 'Hummer', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (16, 'Hyundai', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (17, 'Infiniti', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (18, 'Jaguar', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (19, 'Jeep', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (20, 'Kia', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (22, 'Lamborghini', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (23, 'Land Rower', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (24, 'Lotus', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (25, 'Maserati', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (26, 'Maybach', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (27, 'Mazda', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (28, 'McLaren', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (29, 'Mercedes-Benz', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (30, 'MINI', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (31, 'Mitsubishi', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (32, 'Nissan', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (33, 'Opel', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (34, 'Peugeot', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (35, 'Porsche', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (36, 'Renault', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (37, 'Rolls-Royce', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (38, 'Rover', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (39, 'Seat', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (40, 'Skoda', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (41, 'Smart', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (42, 'Subaru', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (43, 'Suzuki', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (44, 'Tesla', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (45, 'Volkswagen', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (46, 'Volvo', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (47, 'Citroen', NOW(), NOW())");
        DB::insert("INSERT INTO AMarke VALUES (48, 'Toyota', NOW(), NOW())");

        //INERT FÜR KRAFTSTOFF
        DB::insert("INSERT INTO Kraftstoff VALUES (1,'Benzin', NOW(), NOW())");
        DB::insert("INSERT INTO Kraftstoff VALUES (2,'Diesel', NOW(), NOW())");
        DB::insert("INSERT INTO Kraftstoff VALUES (3,'Elektro', NOW(), NOW())");
        DB::insert("INSERT INTO Kraftstoff VALUES (4,'Hybrid(Benzin/Elektro)', NOW(), NOW())");
        DB::insert("INSERT INTO Kraftstoff VALUES (5,'Hybrid(Diesel/Elektro)', NOW(), NOW())");
        DB::insert("INSERT INTO Kraftstoff VALUES (6,'Autogas (LPG)', NOW(), NOW())");
        DB::insert("INSERT INTO Kraftstoff VALUES (7,'Erdgas (CNG)', NOW(), NOW())");

        //INSERT FÜR BAUJAHR
        DB::insert("INSERT INTO Baujahr VALUES (1990, NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr ), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");
        DB::insert("INSERT INTO Baujahr VALUES ((SELECT MAX(id)+1 FROM Baujahr),(SELECT MAX(jahr)+1 FROM Baujahr), NOW(), NOW())");


        //INSERT FÜR AModell
        DB::insert("INSERT INTO AModell VALUES (1,'A1',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
        DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A2',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
        DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A3',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
        DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A4',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
        DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A5',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
        DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A6',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
        DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A7',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
        DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'A8',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
        DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'Q5',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");
        DB::insert("INSERT INTO AModell VALUES ((SELECT MAX(id)+1 FROM AModell),'Q7',(SELECT id FROM AMarke WHERE name='Audi'),(SELECT id FROM Kraftstoff where name='Benzin'), NOW(), NOW())");


        DB::insert("INSERT INTO FMarke VALUES(1,'Fischer', NOW(),NOW())");
    }
}