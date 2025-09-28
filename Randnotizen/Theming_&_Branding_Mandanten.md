# Theming & Branding – Mandantenspezifisches Design

## Kundenanforderung
CI-konforme Darstellung (Logo, Farben, Schriften, ggf. Hoheitszeichen) je **Organisation/Mandant**; **Sales-Channel**-basiert; **AA-Kontraste** und konsistente Komponenten – auch in eigenen Modulen (Approval/Forms). [7][10][13]

## Besonderheiten
- **Designvorgaben öffentlicher Hand:** Stilhandbücher/Hausschriften, nüchterne Anmutung; A11y ist verbindlich. [7]  
- **Hoheitszeichen:** Sorgfältige Nutzung (Stadt-/Landeswappen) nach Vorgaben.  
- **Multi-Mandant:** Verwechslungsfreiheit (Logo/Domain/Theme-Varianten).

## Umsetzung
- **Sales Channels:** Domain/Pfad → Theme-Config; Experience Pages/Impressum je Mandant.  
- **E-Mails/PDFs:** Mandantenlogo/-name in Vorlagen; Testmails je Channel. [11]  
- **Performance & Kompatibilität:** Schlanke Assets; gängige Behörden-Browser (Edge/Firefox ESR/IE-Mode) testen. [11]  
- **Konsistenz:** Eigene Module per SCSS-Variablen ins Theme integrieren; keine Stil-Brüche. [11]  
- **Admin-Guides:** Wechsel von Logos/Farben; Onboarding neuer Mandanten.

## Checkliste (aus Recherche)
- [x] Channels/Theme-Configs je Organisation  
- [x] Mandantenspezifische Inhalte (CMS/Impressum)  
- [x] E-Mails/PDFs angepasst & getestet [11]  
- [x] Performance/Kompatibilität geprüft  
- [x] Konsistenz in Custom-Modulen  
- [x] Admin-Doku/Schulung

## Abhängigkeiten/Überschneidungen
- **Accessibility:** Kontraste/Fokus/Typografie.  
- **Punchout:** Sichtbare Mandantenidentität im Flow.

## Quellen
[7][10][11][13]
