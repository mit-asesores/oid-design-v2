# Design System Specification

## 1. Overview & Creative North Star

### Creative North Star: "The Ethereal Clinical"
This design system moves beyond the cold, rigid grids of traditional medical software to embrace a "High-End AR/VR" aesthetic. It is defined by **Ethereal Fluidity**—a digital experience that feels less like a webpage and more like a light-infused, holographic interface. 

By prioritizing organic layouts, we eliminate the "boxed-in" feeling of legacy systems. We achieve this through **intentional asymmetry**, where content floats in a vast, off-white space, and **tonal depth**, where elements are separated by light and shadow rather than lines. The result is a clinical environment that feels innovative, trustworthy, and breathtakingly airy.

---

## 2. Colors & Surface Philosophy

The color palette is rooted in medical precision but executed with a soft, futuristic touch.

### Tonal Logic
- **Primary & Secondary:** Use `primary` (#006876) and `secondary` (#006e1c) sparingly. They are the "pulse" of the interface, used only for critical actions and brand markers.
- **The Foundation:** The `background` (#F8F9FA) is our canvas. It should feel expansive and never cluttered.

### The "No-Line" Rule
**Prohibit 1px solid borders for sectioning.** Boundaries must be defined solely through background color shifts or subtle tonal transitions. 
- To separate a sidebar from a main view, transition from `surface` (#f8f9fa) to `surface-container-low` (#f3f4f5). 
- Use whitespace as a structural element, not just a margin.

### Surface Hierarchy & Nesting
Treat the UI as a series of physical layers—like stacked sheets of frosted glass.
- **Base:** `surface`
- **Sectioning:** `surface-container-low`
- **Interactive Floating Elements:** `surface-container-lowest` (#ffffff)

### The Glass & Gradient Rule
For high-impact components (Hero cards, Modals), utilize **Glassmorphism**:
- **Fill:** `on_surface` at 5%–10% opacity or `surface_container_lowest` at 60% opacity.
- **Effect:** `backdrop-filter: blur(20px);`
- **Signature Gradient:** For primary CTAs, apply a linear gradient from `primary` (#006876) to `primary_container` (#00bcd4) at a 135-degree angle to provide a "digital soul" that flat color lacks.

---

## 3. Typography: The Airy Editorial

The typography leverages **Inter** for functional clarity and **Manrope** for technical labeling, emphasizing light weights and generous tracking to maintain the ethereal atmosphere.

- **Display (display-lg/md):** Use `font-weight: 200` or `300`. Increase letter-spacing by `0.02em`. This is your "Editorial" voice—large, light, and authoritative.
- **Headlines:** Keep weights at `400` (Regular) to ensure legibility against light backgrounds.
- **The Hierarchy of Trust:** Use `title-md` for patient data or technical results, ensuring the `on_surface_variant` color is used to provide a softer contrast than pure black.
- **Labels (label-md/sm):** Set in **Manrope**. These should be uppercase with `0.05em` letter spacing to mimic the metadata found in high-end HUD (Heads-Up Display) interfaces.

---

## 4. Elevation & Depth

In this system, depth is the primary communicator of importance.

### The Layering Principle
Stacking tiers creates natural lift. Place a `surface-container-lowest` card on a `surface-container-low` section. This creates a "soft-edge" separation that feels organic to the eye.

### Ambient Shadows
When an element must float (e.g., a diagnostic pop-up), use the following specification:
- **Shadow:** `0 20px 50px rgba(0, 104, 118, 0.04)` 
- *Note:* The shadow is tinted with the `primary` color rather than black, creating a more natural, backlit glow.

### The "Ghost Border" Fallback
If a container requires a boundary for accessibility (e.g., an input field), use a **Ghost Border**:
- **Stroke:** `outline_variant` (#bbc9cc) at **15% opacity**.
- **Rule:** Never use 100% opaque borders.

---

## 5. Components

### Buttons
- **Primary:** Gradient fill (`primary` to `primary_container`), white text, `xl` roundedness (1.5rem).
- **Secondary:** Transparent background with a `Ghost Border` and `primary` colored text.
- **Hover State:** All buttons should trigger a "Hover Lift"—a translation of `-4px` Y-axis and an increase in shadow spread.

### Floating Cards
Cards are the heart of the system. 
- **Style:** No borders. `surface-container-lowest` background. 
- **Padding:** Generous (24px to 32px).
- **Interaction:** On hover, increase the `backdrop-blur` from 20px to 30px to simulate the card "approaching" the user.

### Inputs & Fields
- **Background:** `surface_container_low` (#f3f4f5).
- **Active State:** Shift background to `surface_container_lowest` and add a 1pt glow using `primary` at 20% opacity.
- **Dividers:** Forbidden. Use 40px of vertical whitespace between field groups.

### Diagnostic Chips
- **Style:** Semi-transparent `primary_fixed_dim` background with `on_primary_fixed` text.
- **Shape:** `full` (pill-shaped) to contrast against the organic, soft-edged cards.

---

## 6. Do's and Don'ts

### Do
- **Do** use "Optical Centering." Because layouts are organic, perfectly mathematical centering may look "off." Adjust elements visually to maintain balance.
- **Do** embrace white space. If a screen feels "empty," it is likely working.
- **Do** use subtle motion. Elements should fade and slide 10px upward when appearing to mimic a projection turning on.

### Don't
- **Don't** use pure black (#000000). Use `on_surface` (#191c1d) to keep the contrast soft and high-end.
- **Don't** use sharp corners. Every component must use at least `md` (0.75rem) roundedness to maintain the "Organic" brand pillar.
- **Don't** use standard "Drop Shadows." If the shadow is visible as a dark grey smudge, it is too heavy. It should feel like a soft ambient occlusion.

---

## 7. Signature UI Element: The "Aura"
To represent the "Imagen Digital" aspect, use large, low-opacity blurred circles (Blobs) of `primary_fixed` (#a1efff) and `secondary_fixed` (#94f990) in the background of the application. These should be placed behind floating cards to give them a sense of "energy" and clinical innovation.