# 🛠️ Antigravity Factory Workflow Guide: Especificación Detallada

Este documento es el manual operativo de la factoría de software asistida por IA. Contiene la descripción técnica de cada comando, sus entradas, salidas y métodos de validación siguiendo un flujo dual (Cero vs Código Existente).

---

## 🌀 1. Árbol de Decisión de Ejecución (Flujos Maestros)

Sigue la ruta adecuada según el estado inicial de tu componente para asegurar una entrega certificada:

### 🚀 Modelo A: Proyectos desde Cero (Green-Field)
*   **Paso 0: Inicio** → Ejecutar **`/CORE-project-init`** para establecer arquitectura base.
*   **Paso 1: Requerimientos** → Ejecutar **`/PRJCT-groom-backlog`** para crear tickets accionables.
*   **Paso 2: Disparo Cloud** → Ejecutar **`/QA-trigger-jules-session`** (Git Push + Scaffolding).
*   **Paso 3: Sincronización** → Ejecutar **`/DEV-integrate-jules-pr`** para integrar localmente el andamiaje.
*   **Paso 4: Construcción** → Ejecutar **`/DEV-resolve-ticket`** para finalizar el desarrollo local.
*   **Ir a: Fase de Cierre Común (Paso 9).**

### 🏛️ Modelo B: Código Existente (Arqueología / Refactor)
*   **Paso 1: Diagnóstico** → Ejecutar **`/CORE-audit-module`** + **`/SEC-security-scan`** para identificar deuda técnica.
*   **Paso 2: Limpieza** → Ejecutar **`/DEV-resolve-ticket`** para resolver hallazgos críticos de auditoría y seguridad.
*   **Paso 3: Habilitación** → Ejecutar **`/QA-prepare-qa-env`**. **REQUISITO:** El código debe ser estable antes de inyectar infraestructura QA.
*   **Paso 4: Orquestación Cloud** → Ejecutar **`/QA-trigger-jules-session`** (Git Push + Certificación).
*   **Paso 5: Sincronía y Ajuste** → Ejecutar **`/DEV-integrate-jules-pr`** seguido de **`/DEV-resolve-ticket`** para ajustes finales.
*   **Ir a: Fase de Cierre Común (Paso 9).**

### 🏁 Fase de Cierre (Consolidación y Entrega)
*   **Paso 9: Evidencia Técnica** → Ejecutar **`/QA-generate-qa-report`** (Consolidado de cobertura JaCoCo).
*   **Paso 10: Performance (Si aplica)** → Ejecutar **`/QA-setup-load-testing`** para validar concurrencia.
*   **Paso 11: Entrega al Hub** → Ejecutar **`/PRJCT-finalize-module`** para sincronizar portal SPA y ROI.
*   **Paso 12: Adopción** → Ejecutar **`/PRJCT-generate-user-manual`** para crear la guía visual del usuario.
*   **FIN DEL CICLO.**

---

## 📖 2. Diccionario de Comandos y Validaciones

### 🏗️ 2.1 Fase: Inicio y Refinado

#### **0. Inicio de Proyecto (/CORE-project-init)**
- **Para qué sirve:** Análisis de entorno (Legacy vs Modern) y establecimiento de la visión arquitectónica.
- **Comando Simple:** `/CORE-project-init [modulePath]`
- **Comando de Ejemplo:** `/CORE-project-init .`
- **Qué se espera recibir:** Archivo `ARCHITECTURE.md` detallando stack tecnológico y propuesta de módulos.
- **En dónde:** Raíz del proyecto.
- **Cómo validar:** Abrir y revisar manualmente el archivo en: `[projectRoot]/docs/ARCHITECTURE.md`.

#### **1. Grooming de Backlog (/PRJCT-groom-backlog)**
- **Para qué sirve:** Refinar requerimientos crudos (prompts, notas o correos) en historias de usuario técnicas con AC claros.
- **Comando Simple:** `/PRJCT-groom-backlog "[requerimiento_crudo]"`
- **Comando de Ejemplo:** `/PRJCT-groom-backlog "Crear un login federado con Azure AD"`
- **Qué se espera recibir:** Tickets `.md` individuales estructurados.
- **En dónde:** `.agent/backlog/tickets/`.
- **Cómo validar:** Listar y asegurar la existencia de los nuevos archivos en: `[projectRoot]/.agent/backlog/tickets/`.

---

### 💻 2.2 Fase: Construcción y Sincronía

#### **2. Orquestación Cloud (/QA-trigger-jules-session)**
- **Para qué sirve:** Sincronización GitOps (Push automático tras validación de consistencia) y disparo de sesión en la nube de Jules para delegación de tareas (Scaffolding/Testing/Fixes).
- **Comando Simple:** `/QA-trigger-jules-session [ticket.md]`
- **Comando de Ejemplo:** `/QA-trigger-jules-session .agent/backlog/tickets/001-auth.md`
- **Qué se espera recibir:** 
    1. Operación de `git push` realizada tras validación de consistencia.
    2. URL de sesión activa en Jules Cloud.
    3. Rama espejo creada en el repositorio remoto.
- **En dónde:** GitHub y Navegador (Jules Console).
- **Cómo validar:** Abrir la URL proporcionada y verificar que el plan de Jules esté alineado con el ticket.

#### **3. Integración de Jules GitOps (/DEV-integrate-jules-pr)**
- **Para qué sirve:** Descargar y validar localmente las ramas de código generadas por Jules en la nube.
- **Comando Simple:** `/DEV-integrate-jules-pr [ticket.md]`
- **Comando de Ejemplo:** `/DEV-integrate-jules-pr 001-fix-login.md`
- **Qué se espera recibir:** Checkout de la rama remota y ejecución de validación Maven.
- **En dónde:** Directorio de trabajo local y sistema de control de versiones.
- **Cómo validar:** 
    1. Ejecutar `git branch --show-current` y verificar que coincide con la rama de Jules especificada en el ticket.
    2. Revisar la salida de terminal para confirmar que `mvn test` se ejecutó sin errores.

#### **4. Resolución de Ticket (/DEV-resolve-ticket)**
- **Para qué sirve:** Flujo principal de desarrollo TDD para implementar soluciones o corregir bugs locales o hallazgos de auditoría.
- **Comando Simple:** `/DEV-resolve-ticket`
- **Comando de Ejemplo:** `/DEV-resolve-ticket .agent/backlog/tickets/001-fix.md`
- **Qué se espera recibir:** Código fuente modificado (Java, HTML, JS) y ticket movido a historial.
- **En dónde:** Capas Dao/Service/Controller correspondientes y `.agent/history/`.
- **Cómo validar:** 
    1. Verificar que el ticket ya no está en `backlog/tickets/` y ahora se encuentra en: `[projectRoot]/.agent/history/raw_requests/`.
    2. Ejecutar `git diff` para ver los cambios aplicados en los archivos fuente.

---

### 🛡️ 2.3 Fase: Certificación e Infraestructura

#### **5. Habilitación de Infraestructura QA (/QA-prepare-qa-env)**
- **Para qué sirve:** Prepara el entorno para que Jules pueda ejecutar pruebas e integra el portal de documentación SPA.
- **Comando Simple:** `/QA-prepare-qa-env [modulePath]`
- **Comando de Ejemplo:** `/QA-prepare-qa-env src/main/java/com/mit/modules/billing`
- **Qué se espera recibir:** 
    1. `pom.xml` actualizado con las dependencias de **Surefire** y **JaCoCo**.
    2. `.jules.yml` configurado con el comando de ejecución base (`./mvnw clean test`).
    3. Interfaces y Clases del módulo convertidas al estándar **JEP-467** (/// en Markdown).
    4. Estructura base del **Documentation Hub** desplegada en `src/main/resources/static/docs/`.
- **En dónde:** Raíz del proyecto y recursos estáticos.
- **Cómo validar:** 
    1. Ejecutar `./mvnw help:effective-pom` en terminal para validar la carga de plugins.
    2. Verificar portal en: `[projectRoot]/src/main/resources/static/docs/index.html`.
    3. Verificar configuración en: `[projectRoot]/.jules.yml`.

#### **6. Auditoría de Módulo (/CORE-audit-module)**
- **Para qué sirve:** Revisión profunda de estándares técnicos: JEP-467 (Javadoc), principios SOLID y sincronización Vista-Controller.
- **Comando Simple:** `/CORE-audit-module [modulePath]`
- **Comando de Ejemplo:** `/CORE-audit-module src/main/java/com/example/modules/clients`
- **Qué se espera recibir:** Reporte de auditoría detallado (Pass/Fail) por punto de control.
- **En dónde:** `docs/QA/audit_report_[modulo].md`.
- **Cómo validar:** Abrir y leer los hallazgos en: `[projectRoot]/docs/QA/audit_report_[modulo].md`.

#### **7. Escaneo de Seguridad SAST (/SEC-security-scan)**
- **Para qué sirve:** Audita vulnerabilidades estáticas (XSS, SQLi, Secretos Quemados) y dependencias vulnerables.
- **Comando Simple:** `/SEC-security-scan [modulePath]`
- **Comando de Ejemplo:** `/SEC-security-scan src/main/java/com/example/auth`
- **Qué se espera recibir:** Reporte de riesgos clasificados (Alto, Medio, Bajo).
- **En dónde:** `docs/QA/security_audit_[modulo].md`.
- **Cómo validar:** Revisar niveles de riesgo en: `[projectRoot]/docs/QA/security_audit_[modulo].md`.

#### **8. Certificación de Módulo (/QA-certify-module)**
- **Para qué sirve:** Certificación final externa vía Jules Cloud aplicando protocolo GitOps (Push forzado).
- **Comando Simple:** `/QA-certify-module [modulePath]`
- **Comando de Ejemplo:** `/QA-certify-module src/main/java/com/example/core`
- **Qué se espera recibir:** Pull Request de Jules con optimizaciones y blindaje final.
- **Cómo validar:** 
    1. Revisar estado de la sesión en la URL de Jules proporcionada en la terminal.
    2. Verificar la creación del PR en el repositorio GitHub oficial.

---

### 📊 2.4 Fase: Evidencia y Cierre

#### **9. Generación de Reporte QA (/QA-generate-qa-report)**
- **Para qué sirve:** Consolidar evidencias de Surefire y JaCoCo en un reporte ejecutivo con diagramas.
- **Comando Simple:** `/QA-generate-qa-report [modulo]`
- **Comando de Ejemplo:** `/QA-generate-qa-report nomina`
- **Qué se espera recibir:** Documento formal con Pie Chart de resultados y % de cobertura.
- **En dónde:** `[projectRoot]/src/main/resources/static/docs/QA/Reporte_QA_[MODULO]_[FECHA].md`.
- **Cómo validar:** Revisar el reporte interactivo en: `[projectRoot]/src/main/resources/static/docs/QA/Reporte_QA_[modulo]_[fecha].md`.

#### **10. Setup Load Testing (/QA-setup-load-testing)**
- **Para qué sirve:** Inyectar Gatling para simulaciones de carga y performance.
- **Comando Simple:** `/QA-setup-load-testing`
- **Qué se espera recibir:** Clase base `BasicSimulation.java` y pom inyectado.
- **Cómo validar:** 
    1. Verificar creación del archivo en: `[projectRoot]/src/test/java/[paquete]/performance/BasicSimulation.java`.
    2. Ejecutar `mvn gatling:test` y ver reporte en: `[projectRoot]/target/gatling/`.

#### **11. Finalización de Módulo (/PRJCT-finalize-module)**
- **Para qué sirve:** Cierre formal: Diagramas Mermaid finales, Doc Viva y extracción de ROI.
- **Comando Simple:** `/PRJCT-finalize-module [modulePath]`
- **Comando de Ejemplo:** `/PRJCT-finalize-module src/main/java/com/mit/modules/billing`
- **Qué se espera recibir:** 
    1. Registro de entrega consolidado en `src/main/resources/static/docs/DELIVERIES/`.
    2. Sincronización automática con el Portal SPA (`index.html`).
    3. Diagramas Mermaid (Secuencia/Grafos) compatibles con motores web.
- **En dónde:** `[projectRoot]/src/main/resources/static/docs/` y portal web vivo.
- **Cómo validar:** Abrir el navegador en `/docs/index.html` y verificar que el nuevo módulo aparezca como una "Card" interactiva con sus diagramas renderizando correctamente.

#### **12. Generación de Manual Visual (/PRJCT-generate-user-manual)**
- **Para qué sirve:** Crear guías visuales con capturas de pantalla de flujos HTMX reales.
- **Comando Simple:** `/PRJCT-generate-user-manual [url]`
- **Comando de Ejemplo:** `/PRJCT-generate-user-manual http://localhost:8080/portal/items`
- **Qué se espera recibir:** Manual visual con capturas integradas.
- **En dónde:** `docs/USER_MANUALS/`.
- **Cómo validar:** Abrir y verificar las imágenes en: `[projectRoot]/docs/USER_MANUALS/MANUAL_[modulo].md`.

---

## 🛡️ Políticas de Gobernanza Asociadas
- **Backlog as Code**: La única fuente de verdad para el trabajo es el directorio `.agent/backlog/`.
- **GitOps for QA**: Toda certificación con Jules requiere un `git push` previo para asegurar sincronía de datos.
- **Seguridad NAS**: Todo procesamiento ocurre en el entorno local seguro.
- **Gobernanza de Skills (Lean Context)**: Para maximizar la precisión del agente, solo deben existir skills relevantes al tipo de proyecto en el directorio `.agent/skills/`.

### 📦 Matriz de Provisionamiento Sugerida

| Perfil de Proyecto | Departamentos de Skills Requeridos |
| :--- | :--- |
| **Backend / Core Java** | `DEV-`, `CORE-`, `QA-`, `SEC-` |
| **UX / UI / Marketing** | `DSGN-`, `MKT-`, `PRJCT-` |
| **Full Lifecycle** | Todos (Uso moderado) |

> [!TIP]
> Al iniciar un módulo puramente técnico, elimina las carpetas `MKT-` y `DSGN-` de la copia local para reducir el ruido cognitivo del agente y mejorar la velocidad de respuesta.

---

## 🗺️ Trazabilidad de Conocimiento (Knowledge Lineage)
Para mantener el sistema esbelto, las habilidades originales de la fase de incubación (`por_definir`) han sido consolidadas en "Super-Skills" de alto nivel:

| Nuevo Skill (Oficial) | Conocimiento Consolidado (Original) |
| :--- | :--- |
| **`MKT-copywriting`** | `landing-page-generator`, `copywriting` |
| **`MKT-brand-strategy`** | `brand-guidelines`, `brand-perception-psychologist`, `product-marketing-context` |
| **`MKT-content-marketer`** | `content-marketer` |
| **`DSGN-high-end`** | `ui-ux-designer`, `ui-ux-pro-max`, `design-taste-frontend` |
| **`DSGN-motion`** | `3d-web-experience`, `scroll-experience` |
| **`DEV-engineering`** | `java-pro` (Java 21+, Legacy Guard) |
| **`CORE-architect`** | `microservices-patterns`, `api-design-principles` |
