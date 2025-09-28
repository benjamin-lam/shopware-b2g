# Single Sign-On & Identity-Management (SAML 2.0 / OpenID Connect)

## Ziel
Zentraler Login über den behördlichen **IdP** (z. B. Azure AD, Keycloak), **JIT-Provisioning** und **Attribute-Mapping** auf Organisation/Rollen; sichere Tokenprüfung; Deprovisioning-Pfad. [2]

## Anforderungen
- **SP/OIDC-Client:** Redirect-Flows, Signatur/`aud`/`exp`-Prüfungen; Nonce/Replay-Schutz.  
- **Attribute-Mapping:** Gruppen/Rollen/Kostenstelle → Shop-Benutzer & Orga; Priorität IdP vs. lokal.  
- **JIT-Provisioning/Deprovisioning:** Nutzer anlegen/deaktivieren über IdP-Signale; Session-Invalidation.  
- **MFA im IdP:** Shop vertraut IdP-Assurance; No-Bypass.  
- **Doku & Onboarding:** IdP-Team erhält Attributliste, Beispiele (SAML Assertion/ID-Token).

## Checkliste (aus Recherche)
- [x] Keine offenen Registrierungen (optional)  
- [x] IdP-Zwang & Token-Prüfung (Signatur/Gültigkeit)
- [x] Gruppen/Rollen-Mapping geklärt
- [x] Deaktivierung wirkt (Login blockiert, Session invalidiert)
- [x] Nutzerkommunikation/Umstellung dokumentiert [8]

## Abhängigkeiten/Überschneidungen
- **Rollen & Rechte:** Mapping → Berechtigungen.
- **Audit-Logging:** Login/Logout/Attribute protokollieren.

> @todo (PO): Akzeptanzkriterien für SSO (z. B. IdP-Failover, Token-Validierung, Deprovisioning-Laufzeit) festlegen.

## Quellen
[2][8]
