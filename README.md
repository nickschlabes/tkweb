# Tamourkorps Blumenkamp - Website

Eine moderne Laravel-basierte One-Page-Website für das Tamourkorps Blumenkamp mit Vorstandsverwaltung und Instagram-Integration.

## Features

- **Responsive One-Page Design**: Moderne, ansprechende Startseite mit Tailwind CSS
- **Vorstandsverwaltung**: Vollständiges CRUD-System für Vorstandsmitglieder
- **Instagram-Integration**: Verlinkung zur Instagram-Seite mit Platzhaltern für zukünftige Feed-Integration
- **Bildupload**: Unterstützung für Profilbilder der Vorstandsmitglieder
- **Deutsche Benutzeroberfläche**: Alle Texte und Beschriftungen auf Deutsch

## Systemanforderungen

- PHP >= 8.2
- Composer
- SQLite (oder andere Datenbankunterstützung)
- Node.js & NPM (optional, für Asset-Kompilierung)

## Installation

1. **Repository klonen**
```bash
git clone https://github.com/nickschlabes/tkweb.git
cd tkweb
```

2. **Abhängigkeiten installieren**
```bash
composer install
```

3. **Umgebungsdatei einrichten**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Datenbank einrichten**
Die Anwendung verwendet standardmäßig SQLite. Die Datenbankdatei wurde bereits erstellt.

```bash
php artisan migrate
```

5. **Beispieldaten laden (optional)**
```bash
php artisan db:seed --class=VorstandSeeder
```

6. **Storage-Link erstellen**
```bash
php artisan storage:link
```

7. **Entwicklungsserver starten**
```bash
php artisan serve
```

Die Anwendung ist nun unter `http://localhost:8000` erreichbar.

## Verwendung

### Startseite
Die Hauptseite (`/`) zeigt:
- Willkommensbereich mit Hero-Section
- "Über uns"-Sektion
- Vorstandsübersicht mit allen Mitgliedern
- Instagram-Integration
- Kontaktbereich

### Vorstandsverwaltung
Unter `/vorstand` können Sie:
- Alle Vorstandsmitglieder anzeigen
- Neue Mitglieder hinzufügen
- Bestehende Mitglieder bearbeiten
- Mitglieder löschen
- Bilder für Mitglieder hochladen

### Instagram-Integration
Die Seite enthält eine Instagram-Sektion mit:
- Link zur Instagram-Seite (@tamourkorps_blumenkamp)
- Platzhalter für Instagram-Posts
- Hinweis zur Instagram API-Integration

**Für echte Instagram-Posts:**
Sie benötigen Instagram Graph API-Zugang. Weitere Informationen unter:
https://developers.facebook.com/docs/instagram-basic-display-api

## Projektstruktur

```
tkweb/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php        # Hauptseite Controller
│   │   └── VorstandController.php    # Vorstandsverwaltung
│   └── Models/
│       └── Vorstand.php               # Vorstand Model
├── database/
│   ├── migrations/
│   │   └── *_create_vorstand_table.php
│   └── seeders/
│       └── VorstandSeeder.php
├── resources/
│   └── views/
│       ├── layout.blade.php           # Haupt-Layout
│       ├── home.blade.php             # Startseite
│       └── vorstand/
│           ├── index.blade.php        # Übersicht
│           ├── create.blade.php       # Erstellen
│           └── edit.blade.php         # Bearbeiten
└── routes/
    └── web.php                        # Routen-Definition
```

## Anpassungen

### Farben ändern
Die Hauptfarbe (Rot) kann in den Views angepasst werden. Suchen Sie nach `bg-red-700` und `text-red-700` und ändern Sie diese nach Wunsch.

### Instagram-Handle ändern
Ändern Sie in `resources/views/home.blade.php` den Instagram-Namen und -Link.

### E-Mail-Adresse ändern
Ändern Sie die Kontakt-E-Mail-Adresse in `resources/views/home.blade.php`.

## Produktionsdeployment

1. Setzen Sie `APP_ENV=production` in der `.env`-Datei
2. Führen Sie `php artisan config:cache` aus
3. Führen Sie `php artisan route:cache` aus
4. Führen Sie `php artisan view:cache` aus
5. Stellen Sie sicher, dass der `storage`- und `bootstrap/cache`-Ordner beschreibbar sind

## Support

Bei Fragen oder Problemen erstellen Sie bitte ein Issue auf GitHub.

## Lizenz

Dieses Projekt ist für das Tamourkorps Blumenkamp erstellt.