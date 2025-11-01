# Használat

## Adatbázis migráció Turso Cloud-ra
1. MySQL migrációk és esetleges seederek lefuttatása.

2. MySQL típusú sql fájlt SQLite-ra alakítjuk:
    - Belépünk az adatbázis konténerbe: `docker compose exec db sh`
    - Kiadjuk a következő parancsot: `mysqldump -u QuotivaAdmin -P 3306 -h db -p --no-data Quotiva > quotiva_dump.sql`

        > Ez kinyeri az sql fájlt, amit majd sqlite-ra kell konvertálnunk. A mentés konténeren belül történt, így hát át kell azt másolnunk:

3. A konténerből átmásoljuk a gyökérbe a dump sql fájlt:
    - Kiadjuk a következő parancsot: `docker cp mysql-db:/quotiva_dump.sql C:\Users\nemet\Desktop\Billory\quotiva_dump.sql`

4. Konvertáljuk az sql fájlt sqlite-ra:
    - Navigáljunk a ***mysql2mysqlite*** mappába:
        - `cd mysql2sqlite`
    - Adjuk ki a következő parancsot: `./mysql2sqlite ../quotiva_dump.sql | sqlite3 ../quotiva_sqlite.db`