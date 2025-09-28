# Message Queue & Scheduled Task Skeleton

## Was ist das?
Dieses Skeleton zeigt, wie wiederkehrende Aufgaben mit Scheduled Tasks geplant und Nachrichten über die Message Queue verarbeitet werden.

## Typische Anwendungsfälle
- Regelmäßige Health-Checks oder Synchronisationen.
- Entkopplung zeitintensiver Prozesse über Queues.
- Retry-Logik für externe API-Aufrufe.
- Batch-Verarbeitung von Daten.

## Kurzes How-to
1. Scheduled Task in `src/ScheduledTask/AcmeHeartbeatTask.php` anpassen (Intervalle).
2. Handler in `src/ScheduledTask/AcmeHeartbeatTaskHandler.php` mit Logik füllen.
3. Message und Handler in `src/Message` ergänzen.
4. Services in `src/Resources/config/services.xml` registrieren (Tags für Scheduler & Messenger).
5. Message Queue Worker starten (`bin/console messenger:consume --time-limit=60`).
6. Scheduled Task aktivieren (`bin/console scheduled-task:register`).

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Für wiederkehrende, zeitverzögerte oder asynchrone Prozesse.
**Wann nicht:** Bei trivialen Tasks, die synchron ablaufen können.

## Wo erweitern?
- `AcmeHeartbeatTask` – Intervalle und Name.
- `AcmeHeartbeatTaskHandler` – Business-Logik der Scheduled Task.
- `AcmeDemoMessage` & Handler – Verarbeitung asynchroner Jobs.
- `services.xml` – Registrierung der Services.

## Weiterführend
- Begriffe: ScheduledTaskDefinition, Messenger Transport.
- Suche nach `scheduled-task` im Core.
- Themen: Retry-Strategy, Dead Letter Queue.

## Hinweise für Produktion
- Worker als Daemon betreiben und überwachen.
- Logging/Monitoring für Task-Laufzeiten einrichten.
- Idempotente Verarbeitungslogik sicherstellen.
