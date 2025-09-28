# Event Subscriber & Decorator Skeleton

## Was ist das?
Dieses Skeleton zeigt, wie Shopware-Events konsumiert und Services dekoriert werden. Der Beispiel-Subscriber reagiert auf Bestellereignisse, der Decorator erweitert einen bestehenden Service.

## Typische Anwendungsfälle
- Ergänzende Logs oder Notifications bei Order-Events.
- Anpassung von Services ohne Core-Hack mittels Decorator.
- Feature-Flags oder Konditionen vor/ nach Service-Aufrufen.
- Integration externer Systeme bei bestimmten Ereignissen.

## Kurzes How-to
1. Subscriber in `src/Subscriber/CheckoutSubscriber.php` anpassen und gewünschte Events abonnieren.
2. Decorator in `src/Decorator/LineItemServiceDecorator.php` anpassen (Dependencies erweitern).
3. Services in `src/Resources/config/services.xml` registrieren, Prioritäten setzen.
4. Plugin installieren/aktualisieren und Cache leeren (`bin/console cache:clear`).
5. Ereignis testen (z. B. Testbestellung) und Logs überprüfen.
6. Bei Bedarf weitere Services dekorieren oder Events hinzufügen.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Bei leichten Anpassungen bestehender Logik oder Event-basierten Integrationen.
**Wann nicht:** Wenn tiefe Änderungen im Core benötigt werden – hier ggf. eigene Services oder DAL-Erweiterungen vorziehen.

## Wo erweitern?
- `CheckoutSubscriber.php` – Eventlogik.
- `LineItemServiceDecorator.php` – Anpassungen an existierenden Services.
- `services.xml` – Dekorationsreihenfolge und Tagging.

## Weiterführend
- Begriffe: EventDispatcher, Decorator Pattern, Service Tags.
- Suche im Core nach `CheckoutOrderPlacedEvent` und `LineItemService`.
- Themen: Synchrone/Asynchrone Event-Verarbeitung, Performance.

## Hinweise für Produktion
- Logging sparsam einsetzen, um Performance zu erhalten.
- Fehlerhandling einplanen (Exceptions ggf. abfangen und monitoren).
- Tests schreiben, um unerwartete Nebenwirkungen zu vermeiden.
