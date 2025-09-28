# Monitoring (Shopware Plugin)

Problemstellung (allgemein):
B2B/Public-Sector Portale benötigen Governance/Compliance/Integrationen, die Shopware OOTB nicht vollständig liefert.

Ziel:
Grundgerüst (Domain/DI/Events/API) zur schnellen Ergänzung projektspezifischer Business-Logik.

Best Practices:
- Keine Core-Hacks; Events/Subscriber/Decorators verwenden.
- DAL statt direkter SQL-Zugriffe (außer Migrationen).
- System-Config/Policies dokumentieren.
- Unit/Integration-Tests früh anlegen.
