# Beispiel-Notizen für Rules & Flows

- Rule Builder: Beispiel-Preisregel `acme_price_over_100`, Bedingung (Pseudo)
  ```text
  cart.amount.total > 100 && customer.customFields.acme_badge_active == true
  ```
- Flow Builder: Exportierte JSON-Datei hier ablegen (`src/Resources/flow/flows/order-confirmation.json`).
- Reminder: Screenshots des Flow-Aufbaus (Trigger: `order.placed`, Aktion: `send.mail`) an `docs/` anhängen.
- Import: `bin/console workflow:import` existiert nicht – Nutzung über Admin UI. Hinweise hier dokumentieren.
- IDs: UUIDs beim Import prüfen, ggf. mit Deploy-Skripten ersetzen.
