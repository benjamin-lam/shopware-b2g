# Accessibility – Barrierefreiheit (WCAG 2.1 AA / BITV 2.0)

## Kundenanforderung
Der Shop muss für alle Nutzer:innen uneingeschränkt bedienbar sein und **WCAG 2.1 AA** erfüllen. Für Behörden ist dies über **BITV 2.0** verbindlich – inklusive **Barrierefreiheitserklärung** und **Feedback-Prozess**. Ziel ist es, einen **BITV-Test** zu bestehen und eine nachhaltige, barrierefreie Content-Pflege sicherzustellen. [3][7][13][14][26]

## Warum ist das so?
Öffentliche Stellen sind rechtlich verpflichtet, digitale Barrieren zu entfernen. Barrierefreiheit schützt vor Ausgrenzung, verringert Supportaufwand, verbessert SEO/Performance und reduziert rechtliche Risiken. [3][7]

## Umsetzung – Praxisleitfaden
- **Semantik & Struktur:** Korrekte Überschriftenhierarchie (H1–H6), Listen, Tabellen mit Headern/Scopes, Formularlabels; sinnvolle Landmark-Rollen (header, nav, main, footer).  
- **ARIA & States:** Nur ergänzend einsetzen; keine Semantik überschreiben. `aria-live` für dynamische Fehler/Status, `role="alert"` sparsam.  
- **Tastaturbedienbarkeit:** Volle Navigation und Checkout ausschließlich per Tastatur; sichtbarer Fokus (Focus Indicator), sinnvolle Fokusreihenfolge.  
- **Kontraste & Typografie:** Kontrast AA (Text 4.5:1, Large 3:1), ausreichende Größe/Zeilenhöhe; keine rein farbcodierten Informationen.  
- **Medien & Animation:** Alternativen (Untertitel/Transkript), keine flackernden Inhalte; Bewegungen reduzierbar (prefers-reduced-motion).  
- **Fehler & Formulare:** Beschriftete Felder, verständliche Fehlermeldungen; Fokus auf Fehlerbereich; Gruppen mit `fieldset/legend` strukturieren.  
- **Komponenten:** Dropdowns, Carousels, Dialoge, Autocomplete – nur zugängliche Patterns verwenden; Escape/Tab-Trapping korrekt; `aria-modal`, `aria-expanded` konsistent.  
- **Erklärung & Feedback:** Barrierefreiheitserklärung (Stand, bekannte Ausnahmen, Kontakt, Schlichtungsstelle) im Footer verlinken; einfacher Meldeweg für Barrieren. [28]  
- **Redaktion:** Leitfaden für Redakteur:innen (Alt-Texte, Linktexte, Tabellen, Kontraste); keine PDFs ohne barrierefreie Alternative.

## Qualitätssicherung
- **Manuelle Prüfungen:** WAVE/axe + Screenreader (NVDA/JAWS), Tastatur-Rundgänge.  
- **Automatisierung:** axe in CI; kontrast- und title-Checks; Lighthouse-A11y als Baseline.  
- **Regression:** Bei jedem Release Kurztest der Hauptpfade (Navigation, Suche, Produkt, Warenkorb, Checkout).  
- **Optional:** Externer BITV-Test (BIK o.ä.).  
- **Dokumentation:** Ergebnisliste der Barrieren + Maßnahmenkatalog.

## Checkliste (aus der Recherche konsolidiert)
- [x] WCAG-Audit inkl. manueller Screenreader-Prüfung durchgeführt  
- [x] Tastaturbedienbarkeit & sichtbarer Fokus sichergestellt  
- [x] Fehlerhandling mit `aria-live`/Fokus  
- [x] Barrierefreiheitserklärung + Feedback-Prozess veröffentlicht [28]
- [x] Redaktion geschult; Leitfaden dokumentiert
- [x] Wiederkehrende Prüfung (manuell + Tooling) in Pipeline verankert

> @todo (PO): Akzeptanzkriterien für Accessibility (Wenn Nutzer:in X, Dann Ergebnis Y, gemessen durch Z) definieren.

## Abhängigkeiten/Überschneidungen
- **Theming & Branding:** Kontraste, Fonts, Fokus-Stile.  
- **Custom Forms:** Beschriftung/Fehlerkommunikation.  
- **Monitoring:** A11y-Regressionsalarme sinnvoll (optional).

## Quellen
[3][7][13][14][26] vektorrausch – Unterschiede WCAG/BITV/BGG/BFSG  
[28] Barrierefreiheitserklärung – laut Recherchehinweis
