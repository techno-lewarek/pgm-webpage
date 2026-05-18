PGM Engineering — zakres zmian

1. Odświeżony wygląd bez przebudowy CMS:
   - nowoczesny hero/header,
   - lżejsza typografia,
   - zaokrąglone karty oferty,
   - mocniejsze CTA,
   - poprawione mobile spacing,
   - nowy styl stopki i belki cookies.

2. Zachowane trzy języki:
   - PL / EN / DE w plikach jezyki/*.php,
   - przygotowane tłumaczenia nowych i poprawionych tekstów w sql/facelift-update.sql.

3. Wynajem wózków widłowych:
   - podstrona /wynajem-widlakow istniała już w routingu,
   - dodałem ją do menu desktop, mobile i stopki,
   - dodałem nową, tymczasową treść w 3 językach w sql/facelift-update.sql.

4. Wdrożenie:
   - wrzuć pliki na serwer,
   - uruchom sql/facelift-update.sql na aktualnej bazie, aby podmienić powtarzalne treści.

Uwaga: style są dopisane jako sekcja „PGM Engineering — modern facelift 2026” na końcu style.css, więc można je łatwo znaleźć lub wycofać.
