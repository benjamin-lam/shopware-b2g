# Überblick über B2G-Anforderungen

Dieser Überblick fasst die wesentlichen Anforderungen zusammen, die bei der Entwicklung eines öffentlichen Beschaffungsportals beachtet werden müssen.  Detaillierte Erläuterungen findest du in den jeweils verlinkten Dokumenten.

1. **Vergabe und Compliance** – Die Plattform muss die formalen Vergabe- und Haushaltsregeln einhalten, sämtliche Bestellvorgänge revisionssicher dokumentieren und den Kontrollinstanzen (z. B. Rechnungshof) transparent zugänglich machen[2].
2. **Workflows und Rollen** – Öffentliche Einrichtungen arbeiten mit mehrstufigen Genehmigungsprozessen, hierarchischen Organisationsstrukturen und granularen Rollenmodellen.  Das Vier-Augen-Prinzip und Vertretungsregelungen müssen abbildbar sein.
3. **Budgets und Rechnungsstellung** – Bestellungen sind Kostenstellen zuzuordnen, gegen Budgets zu prüfen und elektronische Rechnungen (XRechnung, ZUGFeRD) müssen erzeugt werden.
4. **Integration und Identitätsmanagement** – Der Shop wird in bestehende Verwaltungs-IT eingebettet: ERP-Systeme, Punchout-Kataloge, E-Procurement-Lösungen sowie Single Sign-On via SAML/OpenID Connect müssen integriert werden.
5. **Barrierefreiheit und Multitenancy** – Als Angebot einer Behörde ist Barrierefreiheit nach WCAG 2.1 AA verpflichtend.  Gleichzeitig muss die Plattform mandantenfähig sein, sodass mehrere Behörden getrennt auf demselben System arbeiten können.
6. **Betrieb und Governance** – Der Betrieb unterliegt strengen Auflagen: Monitoring, Audit-Logging, Backup/Recovery, Change- und Release-Management sowie Reporting sind zwingend erforderlich.

Die folgenden Unterdokumente erläutern jedes Themenfeld ausführlich und zeigen mögliche Umsetzungsmöglichkeiten mit Shopware 6.

| Thema                         | Dokument                                          |
|------------------------------|---------------------------------------------------|
| Vergabe & Compliance         | `vergabe_compliance.md`                           |
| Workflows, Rollen & Mandate  | `workflows_roles.md`                              |
| Budgets & E-Invoicing        | `budgets_invoicing.md`                            |
| Integration & Identity       | `integration_identity.md`                         |
| Barrierefreiheit & Mandanten | `accessibility_multitenancy.md`                   |
| Betrieb & Governance         | `operations_governance.md`                        |
