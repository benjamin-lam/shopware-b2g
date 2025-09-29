# Shopware-B2G – Nachschlagewerk

Dieses Repository dokumentiert die Besonderheiten eines B2G-Beschaffungsportals auf Basis von Shopware 6.  Öffentliche Auftraggeber erwarten rechtskonforme, barrierefreie und transparente Einkaufslösungen【39†L1-L3】, daher wird jedes Thema aus fachlicher und technischer Sicht beleuchtet.  Die Dokumente sind in acht Abschnitte gegliedert: **Kundenanforderung**, **Warum ist das so?**, **Anforderungen & Besonderheiten (B2G)**, **Umsetzung – Technische Leitplanken**, **Checkliste**, **Abhängigkeiten/Überschneidungen**, **Akzeptanzkriterien** und **Quellen**.  Ein Glossar definiert Fachbegriffe; das Quellenverzeichnis listet alle Nachweise.  Beispiele demonstrieren, wie man Anforderungen als Shopware-Plugin oder -App umsetzt.

| Thema                               | Dokument                                                        | Beispiel                                  |
|------------------------------------|-----------------------------------------------------------------|-------------------------------------------|
| Überblick B2G-Anforderungen        | [b2g-requirements/overview.md](docs/b2g-requirements/overview.md) | –                                           |
| Vergabe & Compliance               | [b2g-requirements/vergabe_compliance.md](docs/b2g-requirements/vergabe_compliance.md) | [approval-workflow](examples/approval-workflow) |
| Workflows, Rollen & Mandate        | [b2g-requirements/workflows_roles.md](docs/b2g-requirements/workflows_roles.md) | [approval-workflow](examples/approval-workflow) |
| Budgets & E-Rechnungen             | [b2g-requirements/budgets_invoicing.md](docs/b2g-requirements/budgets_invoicing.md) | [cost-centers](examples/cost-centers)       |
| Integration & Identität            | [b2g-requirements/integration_identity.md](docs/b2g-requirements/integration_identity.md) | [customer-sso](examples/customer-sso)        |
| Barrierefreiheit & Multitenancy    | [b2g-requirements/accessibility_multitenancy.md](docs/b2g-requirements/accessibility_multitenancy.md) | –                                           |
| Betrieb, Monitoring & Governance   | [b2g-requirements/operations_governance.md](docs/b2g-requirements/operations_governance.md) | –                                           |
| Shopware-Grundlagen                | [shopware-basics/overview.md](docs/shopware-basics/overview.md) | –                                           |
| Systemarchitektur                  | [architecture/system-architecture.md](docs/architecture/system-architecture.md) | –                                           |
| Datenmodell                        | [architecture/data-model.md](docs/architecture/data-model.md) | –                                           |
| Integrationsmuster                 | [architecture/integration-patterns.md](docs/architecture/integration-patterns.md) | –                                           |

Das [Glossar](docs/glossar.md) erklärt verwendete Abkürzungen und Fachbegriffe.  Alle externen Nachweise sind im [Quellenverzeichnis](docs/quellen.md) aufgeführt.  Die Beispiel-Ordner zeigen, wie man Anforderungen als Plugin oder App umsetzen kann.  Bei umfangreichen Themen sind `@todo`-Vermerke eingefügt, um offene Punkte zu markieren.  Änderungen und neue Dokumente werden im Backlog festgehalten.
