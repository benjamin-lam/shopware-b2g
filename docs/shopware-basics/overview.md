# Shopware 6 – Grundlagen & B2B-Components

Shopware 6 ist eine modulare E-Commerce-Plattform.  Für B2G-Vorhaben ist insbesondere die kommerzielle B2B-Suite interessant, weil sie Organisationsstrukturen und Mitarbeiter-Accounts unterstützt.

## Employee Management
Mit dem Employee-Management können Firmenkunden mehrere Mitarbeiter-Accounts verwalten.  Diese Accounts lassen sich Rollen zuweisen, sodass bestimmte Mitarbeiter Bestellungen aufgeben, andere nur Warenkörbe vorbereiten oder Benutzer verwalten dürfen.  Administratoren verschicken Einladungen an Kollegen und definieren Rollenrechte.  Im Standard deckt Shopware primär Berechtigungen für Bestellungen und die Benutzerverwaltung ab.

## Organisationsstrukturen (Organisational Units)
Organisationsstrukturen erlauben es, eine Firma (oder Behörde) in Einheiten zu unterteilen, z. B. Abteilungen oder Standorte.  Jede Einheit besitzt eigene Benutzer, Adressen und Zahlungsmittel.  Mitarbeiter sehen nur die Daten ihrer eigenen Organisationseinheit.  Dieses Modell bildet einfache Hierarchien ab; für föderale Mandanten wird zusätzlich mit separaten Sales-Channels gearbeitet.

## Sales-Channels & Mandanten
Shopware ermöglicht mehrere Sales-Channels in einer Installation.  Jeder Channel kann eine eigene Domain, ein eigenes Theme und eigene Kundendaten besitzen – ideal für die Trennung zwischen Behörden.  Produkte, Preise und Inhalte lassen sich je Channel konfigurieren.

## Erweiterbarkeit
Durch das Plugin-System lassen sich neue Datenmodelle (Custom Entities), Events, API-Endpunkte und Admin-Oberflächen hinzufügen.  Für B2G-Funktionen wie Genehmigungen, Kostenstellen oder SSO sind eigene Plugins nötig.  Shopware stellt hierfür den DAL (Data Abstraction Layer), ein Event-System und ein Admin-Framework (Vue.js) bereit.

Weitere Informationen befinden sich in den Unterordnern von `plugin-skeletons`, die Gerüste für eigene Plugins enthalten.
