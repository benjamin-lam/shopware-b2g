# State Machine Skeleton

## Was ist das?
Dieses Skeleton demonstriert, wie eine eigene Zustandsmaschine für Bestellungen angelegt und um Transition-Logik ergänzt wird. Es bietet eine XML-Definition sowie einen Subscriber.

ASCII-Diagramm:
```
[created] --(prüfen)--> [review]
   |                        |
   +--(stornieren)--> [cancelled]
   |
   +--(freigeben)--> [completed]
```

## Typische Anwendungsfälle
- Individuelle Order- oder Lieferprozesse modellieren.
- Übergänge mit zusätzlichen Prüfungen versehen.
- Interne Freigabeprozesse abbilden.
- Automatisierte Benachrichtigungen bei Statusänderungen.

## Kurzes How-to
1. XML in `src/Resources/state-machine/acme_order_state.xml` anpassen (States/Transitions).
2. Subscriber in `src/Subscriber/StateTransitionSubscriber.php` erweitern (Validierungen, Logs).
3. Plugin installieren/aktualisieren und State Machine importieren (`bin/console state-machine:dump` zum Prüfen).
4. Cache leeren (`bin/console cache:clear`).
5. State Machine per Admin oder API den relevanten Entitäten zuweisen.
6. Übergänge testen und Monitoring prüfen.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Für strukturierte Prozesse, die über Standardstatus hinausgehen.
**Wann nicht:** Bei simplen Statusanpassungen – dort bestehende State Machines nutzen.

## Wo erweitern?
- `acme_order_state.xml` – Definition aller Zustände/Übergänge.
- `StateTransitionSubscriber.php` – Logik bei Transitionen.
- `OVERVIEW.md` – Ergänzende Hinweise zu Command- oder Flow-Integration.

## Weiterführend
- Begriffe: StateMachineRegistry, TransitionEvent.
- Suche nach `state-machine-order-state` im Core.
- Themen: Flow Builder Trigger, ACL für State-Transitions.

## Hinweise für Produktion
- Statuswechsel testen (Happy/Edge Cases).
- Dokumentation für Support-Teams bereitstellen.
- Observability: Übergänge loggen und ggf. Metriken senden.
