# shopware-b2g

This repository contains scaffolding utilities for bootstrapping a modular Shopware 6 stack that targets B2B and public-sector service portal requirements.

## init_skeleton.sh

Use `init_skeleton.sh` to generate a vendor- and suite-specific plugin stack skeleton. The script creates:

- A root project directory with reusable shared code structure
- CI configuration, documentation stubs, and shared testing setup
- Scaffolds for the governance, integration, and compliance-focused plugins listed in the roadmap
- Example Data Abstraction Layer entities and migrations for the CostCenters and ApprovalWorkflow plugins

### Usage

```bash
bash init_skeleton.sh "Acme" "Csp"
```

This creates a directory named `AcmeCsp-Shopware-Stack` (vendor + suite) that you can copy or mount into a Shopware installation. Review the README inside the generated directory for the next steps on installing dependencies and activating the plugins.
