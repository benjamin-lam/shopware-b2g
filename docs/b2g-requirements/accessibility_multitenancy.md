# Barrierefreiheit & Mandantenfähigkeit

## Kundenanforderung

Als öffentliches Portal muss der Shop für alle Nutzer zugänglich sein – unabhängig von Behinderung oder Gerät.  Behörden möchten außerdem mehrere Einrichtungen auf derselben Installation betreiben (Mandanten), wobei Daten und Branding getrennt bleiben【38†L104-L112】【39†L38-L45】.  Barrierefreiheit und Mandantentrennung müssen durchgängig umgesetzt werden.

## Warum ist das so?

Gesetze wie das Behindertengleichstellungsgesetz (BGG) und die Barrierefreie-Informationstechnik-Verordnung (BITV 2.0) verpflichten Behörden zur Barrierefreiheit im Web【39†L38-L45】.  Mandantenfähigkeit ist erforderlich, weil föderale Behörden gemeinsame Plattformen nutzen und dennoch eigene Datenräume, Budgets und Themes benötigen【38†L104-L112】.  Ohne Multitenancy müssten viele separate Instanzen betrieben werden, was unwirtschaftlich wäre.

## Anforderungen & Besonderheiten (B2G)

1. **Barrierefreie Bedienung:** WCAG 2.1 AA konforme Umsetzung: Tastaturbedienung, klare Navigationsstruktur, Kontraste, semantische HTML-Struktur, ARIA-Labels【39†L38-L45】.
2. **Barrierefreiheitserklärung:** Bereitstellung einer Erklärung zum Stand der Barrierefreiheit und eines Feedback-Formulars.
3. **Testing & Rezertifizierung:** Regelmäßige Tests mit automatisierten Tools (axe, Lighthouse) und manuellen Screenreader-Tests.  Ergebnisse dokumentieren und in den Entwicklungsprozess integrieren.
4. **Mandantentrennung:** Datenräume pro Behörde; getrennte Sales-Channels oder Mandanten-IDs im Datenmodell.  Keine Überschneidung von Kunden-, Bestell- oder Budgetdaten【38†L104-L112】.
5. **Branding & CMS:** Mandanten können individuelles Branding (Logo, Farben, Impressum) und eigene Inhalte pflegen.  CMS-Seiten und Themes müssen pro Mandant konfigurierbar sein.
6. **Organisationseinheiten:** Innerhalb eines Mandanten können mehrere Organisationseinheiten bestehen (Abteilungen, Schulen) mit eigenen Benutzern und Kostenstellen.

## Umsetzung – Technische Leitplanken

- **Theme-Anpassungen:** Entwickeln Sie ein barrierefreies Theme.  Verwenden Sie semantische HTML-Elemente, ARIA-Attribute, ausreichende Farbkontraste und responsives Design.  Definieren Sie eine Theme-Konfigurationsschnittstelle für Logos, Farben und Schriftarten pro Sales-Channel.
- **Multitenancy Modell:** Implementieren Sie eine Mandantentabelle mit eindeutiger ID und verknüpfen Sie alle relevanten Entities (Customer, Order, Product, Cost Center) über Foreign-Keys mit dieser ID.  Alternativ können separate Sales-Channels mit Mandanteninformationen konfiguriert werden.  Nutzen Sie Shopware-Scopes und Context, um Daten automatisch nach Mandant zu filtern.
- **Mandanten-Admin:** Erstellen Sie ein Admin-Modul zur Verwaltung von Mandanten: Anlage, Aktivierung/Deaktivierung, Zuordnung von Sales-Channels und Benutzergruppen.  Für jede Mandantenressource (Theme, CMS-Seite) wird eine eigene Konfiguration gespeichert.
- **Zugriffskontrolle:** Stellen Sie sicher, dass Benutzer aus Mandant A keine Daten von Mandant B sehen können.  Filtern Sie API-Anfragen und Admin-Module anhand der Mandanten-ID.  Zusätzlich kann ein Mandantenwechsel nur Admins erlaubt sein.
- **Barrierefreiheitstests:** Integrieren Sie automatisierte Tests (axe-core, Lighthouse) in die CI/CD-Pipeline.  Verfassen Sie ein Barrierefreiheitshandbuch, das genutzte Komponenten und Prüfkriterien dokumentiert.  Legen Sie ein Feedback-Formular an, das Barrierehinweise aufnimmt.

## Checkliste

- [ ] Theme erfüllt WCAG 2.1 AA (Tastaturbedienung, Kontraste, ARIA, semantische HTML).
- [ ] Barrierefreiheitserklärung und Feedbackformular verfügbar.
- [ ] Automatisierte und manuelle Barrierefreiheitstests eingerichtet.
- [ ] Mandantenmodell implementiert (Mandanten-IDs oder Sales-Channels).
- [ ] Mandanten können Branding und CMS individuell gestalten.
- [ ] Organisationseinheiten pro Mandant unterstützt.
- [ ] Offene Punkte (`@todo`) markiert (z. B. Testspezifikationen, Mandantenspezifische Preisregeln).

## Abhängigkeiten/Überschneidungen

Mandantenfähigkeit beeinflusst **Roles & Workflows** (Rollen pro Mandant), **Budgets** (separate Budgets pro Mandant), **Integration** (Mandanten-ID in ERP-Schnittstellen) und **Betrieb** (Monitoring nach Mandant).  Barrierefreiheit erstreckt sich über alle Frontend-Module, daher müssen Plugins und Themes durchgängig barrierefrei sein.

## Akzeptanzkriterien

1. Das Frontend ist barrierefrei getestet und erfüllt WCAG 2.1 AA.  Feedback wird angenommen und verbessert.
2. Mandanten können getrennt eingerichtet, verwaltet und mit eigenem Branding betrieben werden.  Datenüberschneidungen sind ausgeschlossen.
3. Organisationseinheiten pro Mandant funktionieren (z. B. Unterabteilungen mit eigenen Benutzern).
4. Barrierefreiheitstests sind Teil der CI/CD und werden dokumentiert.

## Offene Fragen

- Wie wird die Barrierefreiheit kontinuierlich getestet und dokumentiert?
- Wie viele Behörden (Mandanten) müssen gleichzeitig unterstützt werden und wie unterscheiden sich deren Sortimente?
- Welche Mechanismen stellen sicher, dass keine Daten über Mandantengrenzen hinweg sichtbar werden?

## Quellen

Siehe Quellen [9], [10] im Quellenverzeichnis.
