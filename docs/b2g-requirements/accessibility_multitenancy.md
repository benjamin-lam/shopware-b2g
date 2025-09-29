# Barrierefreiheit & Mandantenfähigkeit

Als öffentliche Plattform ist der Shop verpflichtet, barrierefrei zu sein und mehrere Behörden (Mandanten) gleichzeitig bedienen zu können:

- **Barrierefreiheit:** Der Shop muss den Anforderungen der WCAG 2.1 AA und der deutschen BITV 2.0 genügen.  Dazu zählen vollständige Tastaturbedienbarkeit, ausreichende Kontraste, semantische Auszeichnung (ARIA), Alternativtexte und eine leicht verständliche Sprache.  Eine Barrierefreiheitserklärung mit Feedback-Mechanismus ist bereitzustellen.  Regelmäßige Tests (automatisiert z. B. mit axe/Lighthouse und manuell mit Screenreader) sind obligatorisch.
- **Multitenancy:** Mehrere Behörden nutzen die gleiche Installation, benötigen aber separate Datenräume, individuelles Branding (Logo, Farben, Impressum) und eventuell unterschiedliche Sortimente/Preise.  Shopware kann dies durch separate Sales-Channels abbilden.  Organisationseinheiten innerhalb eines Mandanten (z. B. Abteilungen) müssen ebenfalls unterstützt werden.  Es darf keine Datenüberschneidungen zwischen Mandanten geben[2].

**Umsetzung in Shopware:**

Barrierefreiheit erfordert Anpassungen an Templates und Komponenten – Kontrast-Themes, ARIA-Attribute, Keyboard-Support und eine modulare Übersetzungsstruktur.  Für die Multitenancy werden je Behörde eigene Sales-Channels mit individuellen Themes eingerichtet; kundenbezogene Daten müssen durch Tenant-IDs getrennt werden.  Mandantenwechsel und Theme-Konfiguration sollten für Administratoren einfach konfigurierbar sein.

**Offene Fragen / Akzeptanzkriterien:**

- Wie wird die Barrierefreiheit kontinuierlich getestet und dokumentiert?
- Wie viele Behörden (Mandanten) müssen gleichzeitig unterstützt werden und wie unterscheiden sich deren Sortimente?
- Welche Mechanismen stellen sicher, dass keine Daten über Mandantengrenzen hinweg sichtbar werden?
