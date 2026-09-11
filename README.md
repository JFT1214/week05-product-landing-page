# THE STREET Coffee — Product Landing Page

## 1. Project Title

**THE STREET Coffee — Responsive Product Landing Page**

A modern and responsive coffee shop landing page built using Laravel, Blade Components, Tailwind CSS, and MySQL.

---

## 2. Introduction

A product landing page is a focused website designed to present a product or service, communicate its value, and encourage visitors to take action.

For businesses, a landing page provides an organized way to showcase products, services, customer experiences, contact information, and important brand details.

This project was developed for **THE STREET Coffee**, a modern café concept focused on specialty coffee, community, workspace, and café culture.

The project demonstrates how Laravel Blade Components and Tailwind CSS can be used to create a reusable, responsive, and maintainable web interface.

---

## 3. Objectives

The objectives of this project are:

* Build a modern coffee shop product landing page.
* Create a responsive interface for desktop, tablet, and mobile devices.
* Use reusable Laravel Blade Components.
* Implement Tailwind CSS for utility-based styling.
* Display coffee products dynamically from the database.
* Create a customer testimonial section.
* Develop a consistent and accessible UI design.
* Apply responsive web design principles.
* Organize the project using a maintainable folder structure.

---

## 4. Responsive Web Design

The website follows a responsive and mobile-first approach.

### Mobile-First Design

The layout is initially designed for smaller screens and progressively enhanced for larger devices.

### Responsive Breakpoints

Tailwind CSS responsive utilities are used to adjust layouts at different screen sizes.

Examples include:

* `sm:` — small screens
* `md:` — medium screens
* `lg:` — large screens

### Flexbox

Flexbox is used for navigation, buttons, alignment, and other one-dimensional layouts.

### CSS Grid

CSS Grid is used for multi-column sections such as:

* Features
* Coffee menu
* Testimonials
* Footer content

### User Experience

Responsive spacing, readable typography, accessible contrast, and touch-friendly buttons help provide a consistent experience across devices.

Responsive design is important because users access websites using different devices and screen sizes.

---

## 5. Tailwind CSS

Tailwind CSS is a utility-first CSS framework that allows developers to style interfaces directly using utility classes.

### Advantages

Tailwind CSS provides:

* Faster development
* Consistent spacing
* Responsive utilities
* Reusable styling patterns
* Easy customization
* Reduced need for large custom CSS files

### Responsive Utility Classes

The project uses responsive utilities such as:

```text
grid-cols-1
md:grid-cols-3
lg:grid-cols-2
px-4
sm:px-6
lg:px-8
```

These classes allow the interface to adapt to different screen sizes.

### Project Examples

Tailwind CSS is used throughout the project for:

* Navigation
* Hero section
* Feature cards
* Coffee menu cards
* Testimonials
* Footer
* Responsive layouts
* Buttons and interactive states

---

## 6. Blade Components

Laravel Blade Components are reusable pieces of UI that help organize the application's presentation layer.

The project uses reusable components for the major sections of the landing page.

### Main Components

```text
navbar.blade.php
hero.blade.php
features.blade.php
pricing.blade.php
pricing-card.blade.php
testimonials.blade.php
testimonial-card.blade.php
footer.blade.php
page-background.blade.php
```

### Benefits

Using Blade Components provides:

* Better code organization
* Reusable UI elements
* Easier maintenance
* Cleaner page templates
* Reduced code duplication
* Modular development

For example, the main landing page uses:

```blade
<x-navbar />
<x-hero />
<x-features />
<x-pricing />
<x-testimonials />
<x-footer />
```

This keeps `welcome.blade.php` clean while allowing each section to be developed independently.

---

## 7. UI Design

The interface uses a modern coffee-inspired design system.

### Color Palette

The main visual palette includes:

* Dark gray and black backgrounds
* White surfaces
* Orange accents
* Amber highlights
* Neutral gray text

The orange and amber colors represent warmth and coffee while the dark colors provide strong visual contrast.

### Typography

Typography is designed to be:

* Clear
* Modern
* Readable
* Hierarchical

Large headings are used for important sections while smaller text is used for descriptions and supporting information.

### Iconography

Icons are used to improve visual communication and make navigation and contact information easier to understand.

### Buttons

Buttons use clear labels and strong contrast.

Examples:

* Order Now
* View Menu

### Cards

Cards are used for:

* Coffee products
* Features
* Customer testimonials

Cards use rounded corners, borders, shadows, and consistent spacing to create a unified visual system.

### Consistency

The same spacing, typography, colors, buttons, and card styles are used throughout the website.

This creates a consistent user experience.

---

## 8. Folder Structure

Important project directories include:

```text
resources/
├── views/
│   ├── layouts/
│   ├── components/
│   │   ├── navbar.blade.php
│   │   ├── hero.blade.php
│   │   ├── features.blade.php
│   │   ├── pricing.blade.php
│   │   ├── pricing-card.blade.php
│   │   ├── testimonials.blade.php
│   │   ├── testimonial-card.blade.php
│   │   ├── footer.blade.php
│   │   └── page-background.blade.php
│   │
│   └── welcome.blade.php
│
├── css/
└── js/

public/
└── images/

screenshots/
documentation/
```

---

## 9. Dynamic Coffee Menu

The coffee menu is connected to the database instead of relying on static pricing cards.

Products are retrieved using the Laravel `Product` model.

Example:

```php
$products = Product::orderByDesc('is_featured')->get();
```

The products are then displayed using the reusable pricing card component.

This allows coffee products and prices to be managed through the database.

---

## 10. Customer Testimonials

The landing page includes a customer testimonial section designed to showcase customer experiences.

Each testimonial card contains:

* Customer name
* Customer photo
* Customer status
* Review
* Rating

The testimonial layout uses a reusable Blade Component.

---

## 11. Customizable Page Background

The project includes a reusable `page-background` Blade Component.

Example:

```blade
<x-page-background
    background="bg-gray-50"
    class="min-h-screen w-full overflow-hidden"
>
    ...
</x-page-background>
```

The background can be changed using Tailwind CSS classes.

Examples:

```text
bg-white
bg-gray-50
bg-[#F5EFE6]
bg-gradient-to-br from-gray-100 to-orange-50
```

This makes it possible to customize the visual background of individual pages without duplicating layout code.

---

## 12. Before and After

### Before Design

The initial version was a basic landing page prototype with simple layouts and limited visual refinement.

The early design was used as the starting point for improving:

* Layout
* Spacing
* Responsiveness
* Component organization
* Visual hierarchy

### After Design

The final version provides:

* Responsive navigation
* Modern hero section
* Feature cards
* Database-driven coffee menu
* Customer testimonials
* Responsive footer
* Reusable Blade Components
* Customizable page background
* Mobile, tablet, and desktop layouts

Before-and-after comparison images are stored in:

```text
documentation/
```

---

## 13. Screenshots

The project documentation includes screenshots for:

* Before Design
* After Design
* Desktop Layout
* Tablet Layout
* Mobile Layout
* Navigation Bar
* Hero Section
* Features Section
* Pricing / Coffee Menu
* Testimonials
* Footer
* VS Code Project Structure
* Blade Components Folder
* GitHub Repository

Screenshots are stored in:

```text
screenshots/
```

---

## 14. Technologies Used

* Laravel
* PHP
* Blade
* Tailwind CSS
* Vite
* MySQL
* HTML
* JavaScript
* Git
* GitHub

---

## 15. Git Commit History

The project was developed using meaningful Git commits to document the development process.

Examples:

```text
feat: create landing page layout
feat: build responsive navbar
feat: create responsive hero section
feat: build feature cards
feat: implement coffee menu section
feat: add customer testimonials
feat: update coffee shop footer
style: improve responsive page spacing
refactor: organize landing page components
docs: update README
```

---

## 16. Conclusion

THE STREET Coffee demonstrates how a modern product landing page can be developed using Laravel, Blade Components, Tailwind CSS, and MySQL.

The project applies responsive design, reusable components, database-driven content, and a consistent visual design system to create a user-friendly coffee shop website.

Through this project, I gained experience in responsive web development, Laravel Blade Components, Tailwind CSS, database integration, UI design, Git, and GitHub project management.

---

## 17. Repository

**GitHub Repository:**

`https://github.com/JFT1214/week05-product-landing-page`

The repository is public and contains the project's source code and documentation.

````

### Commit #10

Save `README.md`, then run:

```powershell
git add README.md
git commit -m "docs: update README"
git push
````

Then verify:

```powershell
git log --oneline -10
```

Dapat makita natin yung **10 commits**.

Pag successful ang push, **minimum 10 commits requirement natin complete na**. 🔥
