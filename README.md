# Arena of Glory

> Een turn-based gladiator vechtspel geïnspireerd op de klassieker *Sword and Sandals 2*

Bouw je eigen krijger op, verdien goud in de arena, koop steeds betere wapens en bepantsering, en versla de kampioenen om de ultieme **Champion of the Arena** te worden.

---

# Over het spel

In *Arena of Glory* creëer je een gladiator vanaf nul en vecht je je een weg omhoog door de rangen van de arena. Elk gevecht is turn-based: je kiest zorgvuldig je aanvallen, magie en bewegingen, terwijl je let op je stamina, mana en health. Tussen gevechten door verdeel je skill points, koop je nieuwe uitrusting in de winkel, en train je je krijger voor de volgende uitdaging.

# Features

- **Character creator** met aanpasbaar uiterlijk (haar, baard, huidskleur, lichaamsbouw)
- **6 stats** om te verdelen: Strength, Attack, Defense, Vitality, Agility, Charisma
- **Turn-based combat** met aanvallen op hoofd, lichaam en benen
- **Magic system** met spreuken zoals fireball, healing en lightning bolt
- **Uitgebreide winkel** vol wapens, schilden, helmen en harnassen
- **15+ tegenstanders** met oplopende moeilijkheidsgraad, eindigend bij de Arena Champion
- **Taunt-systeem** waarmee je tegenstanders kunt intimideren of aanmoedigen
- **Save & load** zodat je je carrière kunt voortzetten

# Hoe te spelen

## Installatie

```bash
git clone https://github.com/jouwgebruikersnaam/arena-of-glory.git
cd arena-of-glory
npm install
npm start
```

## Controls

| Toets | Actie |
|-------|-------|
| `1-9` | Selecteer actie uit menu |
| `A` | Aanvallen |
| `D` | Verdedigen |
| `M` | Magie gebruiken |
| `T` | Tauntende beweging |
| `Esc` | Pauzemenu |

# Combat-systeem

Elke beurt kies je één van de volgende acties:

1. **Attack** — Kies tussen een snelle, normale of zware aanval, gericht op hoofd / lichaam / benen
2. **Defend** — Verhoog tijdelijk je defense en herstel een beetje stamina
3. **Cast Spell** — Gebruik mana voor offensieve of ondersteunende magie
4. **Use Item** — Drink een potion of gebruik een scroll
5. **Taunt** — Probeer je tegenstander uit balans te brengen voor een bonus

Stamina bepaalt hoe vaak je kunt aanvallen, mana hoeveel spreuken je kunt casten, en health... tja, health spreekt voor zich.

# Progressie

Na elke overwinning verdien je **goud** en **experience points**. Bij een level-up krijg je skill points die je kunt verdelen over je stats. Investeer in:

- **Strength** voor meer schade per slag
- **Agility** om vaker te ontwijken
- **Vitality** voor meer health
- **Charisma** voor betere prijzen in de winkel en sterkere taunts

# Tech stack

- JavaScript (vanilla) of React, afhankelijk van je voorkeur
- HTML5 Canvas voor de arena-rendering
- LocalStorage voor save games
- Web Audio API voor sound effects

# Roadmap

- [ ] Multiplayer-modus (PvP via WebSockets)
- [ ] Meer arena's met verschillende thema's (woestijn, ijsvlakte, vulkaan)
- [ ] Meer uitrustingsslots (ringen, amuletten)
- [ ] Achievements en leaderboards
- [ ] Mobile support

# Licentie

MIT License — voel je vrij om dit project te forken en je eigen arena te bouwen.

---

*"Are you not entertained?!"* — Maximus
