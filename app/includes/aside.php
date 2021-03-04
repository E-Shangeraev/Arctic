<?php 
  $url = explode('?', $_SERVER['REQUEST_URI']);
  $url = $url[0];
  if ($url === '/' || $url === '/index.php') {
    $sectionCount = 11;
  }
  if ($url === '/news.php') {
    $sectionCount = 3;
  }
  if ($url === '/norilsk.php') {
    $sectionCount = 7;
  }
  if ($url === '/center.php') {
    $sectionCount = 6;
  }
  if ($url === '/flora&fauna.php') {
    $sectionCount = 3;
  }
  if ($url === '/tourist.php') {
    $sectionCount = 4;
  }
  if ($url === '/404.php') {
    $sectionCount = 1;
  }
  if ($url === '/article.php') {
    $sectionCount = 1;
  }
?>

<aside class="aside">
  <a href="index.php" class="logo">
    <svg width="93" height="66" viewBox="0 0 93 66" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    `<mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="93" height="66">
    <rect width="93" height="66" fill="url(#pattern0)"/>
    </mask>
    <g mask="url(#mask0)">
    <rect class="logo-color" width="93" height="66" fill="white"/>
    </g>
    <defs>
    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
    <use xlink:href="#image0" transform="translate(-0.00220342) scale(0.00387802 0.00546448)"/>
    </pattern>
    <image id="image0" width="259" height="183" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAAC3CAYAAAAW/TscAAAgAElEQVR4nO2de7hVdZnHP3LzRKJECkokyZDIdIaiHIzRsVMkD0kaA2OZjZdQUxM1SsecMS3tMpYl3ZwuUmqGJkaESGp5Y7wQQ2IMI6E8omgkmTyayTggZ88f37Vmrb32b+3rup7zfp5nP3uv3157rd/ZZ693vb/3ukelUsEwjNLTBewLPNPuAQYkNxfDMHLkFWBIJwcwYWAYfYNxQA8dCAQTBobRN5gBLASObPcAJgwMo/zsD0z2Xh/X7kFMGBhG+ZkBnOa9HgEc3c5BTBgYRrkZA8wBHgLeDhwAXAVMb/VAJgwMo9wcAbwfWAqsBa4GDgZmtnqgPSzOwDBKy4HA94E3A4cC273x+4HXAJcCy5s9mGkGhlFODgGuQ8uBrxEIAoAr0ZLhm8BJzR7QNAPDKC7vRHEDXcAgdPP+i7d9AfAe4AG0VIhyPXAisAb4HPAEMi7u9I4BMNw75k5gpwkDwygW44BeFEA0H5jkjf8IGAYM9Lb3BB5DWsFmx3EGI63hAGCHd8zdKFJxWWi/y4CfA5sGJfhHGIbROU94zzvRRexzAbCthePsAm5zjE/wnp8E7gS+4J3LlgmGUWDehDSEDwNbgPOBFzs4Xg+yI+wFrADODr9pBkTDKC5PAtcCvwDeCzwNXEKwVGiFy4F7kCC4nYggANMMDKMsfAy4CGkL9wKnA5ua+NxA4AbgeCRclgHnuXY0zcAwysH30Pr+SaTuz2vyc5ORIAC4mRhBACYMDKNMXIPchCA3YTOsJ9AgflJvRxMGhlEubvKen3K85xIQryCvAcDQegc2YWAY5eJ87/mG0NihwHdQgNH9aCkwJvS+rxF01TuwCQPDKA8HAkd5rzeiC/47wH8CE4EvI4/DAuDXwFeAUShKEeBUYHTcwc2bYBjlYSjwcmRsNfBT4FfAw+hin4WWB3OorW3wDm+/GiwC0TDKw8jQ6/uBO4CV3sNnK0pjBi0bfom0CV8o7B13cNMMDKM8fBO5FX8IPAisavJzk5Bd4USU3Xg28Gx0JxMGhlEODkTZiVtR0FE7TAL+Gvgd8Ej0TRMGhlEOhgMvJHSskcAfo4MmDAzDAMy1aBiGhwkDwzAAEwaGYXiYMDAMAzBhYBiGhwkDwzAAEwaGYXiYMDAMAzBhYBiGhwkDwzAAEwaGYXiYMDAMA7DiJoaRBN3AbNTQ9C+oXdleKDPw5hzn1RImDAyjPfYF3o8u9m2oP8GRVFcofhgYD9yCmqQWGlsmGEbzjAT+BXU1ehF4HHU7fg74B+B9wEOh/d+OGp/ULVFeFEwzMPoLQ1Bbcv+1/9sP3xCjN8cBqLBoF3AKurv/D7AH6nL8QGT/1cC7UFXiMwhKk+/sePYZYMLA6KsMQXfkV5A6f7L33A5Xe8d7CPUqrMcu4BNIUHwf2IeSaOAmDIy+xP7IgHcIMB84wRt/AK3ll6BORE+gdf52pOK/hC7iXUh7GBB6Hoaal25scS6LgbFIS6jbvKQoWNkzo+y8CV24nwLehox4t6MLeR1S3VfjbkeWNgchwfP3qLR5oTHNwCgr44B/Aj6ADHVPoSaj56DqwetbONYoYCrSDO5CS4skeNF7tmWCYbTAIFTb/1XU/COOg9Ha/8PAW9FFfyGwCHimjfPOAr6I2pPhHecjbRynHr2Nd8kfEwZGUTgTNQl5BPgu6iEY5hDgvcgQOAF1Cvo0upO3yxTgRqrX9Pt2cLwoA71n0wwMo0kGEdyZ3wacDuxAa/6hqPHH6SjSbylwLtX+/Ha5nEAQbPCO+aUEjuvjxxeYZmAYTfJx7+HzduC60PZupAnMpP1uQlFmIg3jR6i9+W+RhyFJ/LbopfAmmDAwikA9NfoBdLe+Leb90Ui1fy0yAD6PbAe7mjjnOcCtLc20NbqB64EnUzxHYpgwMPJmEHCAY3wTcBVBR2GfCaj56FQkBHrRHf1x4L8JYgYakaYQ8JmKNI9NGZyrY0wYGHkyCPgqsgH47EAX0BXAZm9sIAogOgaYhgKInkJBRHcCa0lexe+UaUho/SDneTSNCQMjL4YgQTAvNLYUaQMrQ2PTkaFvSmjsy8CVKHqwqJyBIhBLYTwEEwZG9gxBsftTkY8f5B68Brgpsu8slCI8ODR2NrVLh6JxDHCc93p7nhNpBRMGRhZ0AR9DOf8DgJO8cV8ILEYegyiHUy0IQMuCInMQ1cLqH4GvoZyJQmPCwEiTvYAPopDhY0PjtyHX4eIGn78aGQyPCY3NRTUFish4YDmBSxE09weBX+UyoxawRCUjafZHsf1HAx9FUYMgdXkJMg6udH80lhne40ikQXyZxoIkayYjDWBPFBm5GtU+OAf4Vo7zahrTDIwkGI3U/4NRnsD00HubkABYjKL82uF279GFfPdFowuYhMKofbvH8d7zI7nMqA1MMzDaZSQSAkOBi6guHLILeQYWoYs4qSzAsjAL+BnwO6Qdrcp3Os1hmoHRCl3IxbcTOIvAEOhzL/BjJADaySAsOyOQYJyPNIIvUBJBAKYZGI2Zjm4af0ZFPz8Zem83Whv7wT/rMp9d/gxDbtIPAO9GNQx+ggTi73KcV8uYMDDCTEEZgjvQ3f8QlC04LrTPNiQAbkeuwVbLgZWVoah+wsEomOiN3uvJSCCsRkuDZcCjOc2xI0wY9E+GoypBrxJEyA1CBUOOiOy7GcX9r0PLgIcoUSBNhwxG6//j0N1/jGMfXwjcjEqclRYTBn2b6ah60AvoYvdLf09GQUBRtqKY/02ogtAjqOpQf7n4w8zzHhNi3v8VcB8Kmno2q0mliQmDcvGPwGFoXTqAoJIO3rb/6PUeM5AwiPIUuuM/jQx9T6CeAE/QPw1/YXqA89H3Nipmn8tQDsULGc0pE0wYtI6fe98L/B1wIlpf9zr2CV+crR7b3+4NPXpQJaBmWIcu+m3ojv+093pbaNyoZipwFPpulnrP4QtkERKYl1KiBKRm6U/CoIvgog1frK8iQ9B8AjXad7kOovYC9S/MHd7nwmG2SbMR+exfAf6XoNb/y0g7eAHl72/3Hi962/5YM3n9RsAw9N35nI/6HtyCPAMLKUmhknboS8JgADKMhVtZ9aIL6XjgQ1Qni5yAosV2oCIZcRf1JoILbAe6AHd4x/XvtP7F+krosYOgMccu5IYLvw7f/f25+sLKf9/ft68wDy1Hip5sdDKqpzAKeQdORx2V+zRlDToaje7oeM97oSYa58Z+opaN3nG2A1tQDHn4DrsdXfgv0v8i6NJiMCoDdiHVNQ6LQjeqsTAdCaxfoqVBnxcEUA7NYH90se/wHkcDpwLvqfOZl4A/ISvvH5DfdwPBndy/6O0iz5ZRSAjvg5KNLqY4S5l5wOfR3O5GYcRbcp1RxhRRGOyNgl3+iATBvxLfMPM5ZP3ejFxgG73tZ5DRzCgeF6GmJSAf/RUogjEvRqN+DbO97eUo1LrfeVWKIgx6ULhrL6pkc5pjH9//7ffP2+SNFbn0leHmHvQ/B2kGtyP7za1UG/DSpgd1Sh4PrEAGwjX0M43AJ09hcCRa7/cgg83BofdeIgh8udd73kjQu84oN93IQh8N6FmNah08hCodP0XzS7mhyCaxCy0nGzEPWIBiNe5GNqNShhEnRZbCYAq64J9F8e9noeUAaP2+Ht3170GZXqbm920mohZqR9bZx4+V8N2p/kU+GLmK/eYkL6E4iv9GlZIb/XYWAOd5r1cAF9DPBQFkIwwmobv/cVTHva8FfoMu/pX0wzWawVDkyz+eoL1as2xCRuE1SKP4DY2XjEPRUuB41CL9UiRw/tTiufskaQmDNyGDzE5UA246ku6rkQq4EnXKKYol2ciX0SjybwrKkNwHRQOCbhovIS+QHzq9gcBY3CwjUK2FGUiAnEX9bs/9jqSFwUhUAPMwlBUX5g2Y6m80RxeqJQhBMFcnjEIGyh4kAM5GNyYjRBJBR3uhDLgulON9Zp1998GMgHkyFNgPrcOLjB/FmQSjkbFyKrJFnYcJAiedCoN5wN/gTocNcxWSyg9hwiBPdiF1fBxaqt2e73RSZzSqNTAFeBhFqZogiKHdZcIg1EI77BFwsRaFc/6UoG+ekT9zkTt3F+oFuCjf6aTCCJRXcDgSBOeg/gVGDK0Kg71Qgs9RKLc+jvWoVvx1WMhvUekG/g2YidbRX0Bpu32BYWhpMB1pAvMxQdCQVoTBmeiHExcaDPIYfAs1k7DlQDkIhwcvBj5D+esa/gyVKzNB0ALNCIPxKDDko9TWxwtzK2p7tT6ZqRkZMgVlE05AgT3/Anw91xm1z0K0DAJ4F613b+q3NBIGs5Ebpl6G4A7gSyjjyygvI5BAmOlt34T+92Wqf/g54BLv9TJU4LWZ0GSDxsJgCKoF141aR0XZjAyJfd0q3Z+4kaA12AMoXbwMy4a5SCsAFSu9FFsetESzNoNu4L8iYytRR52i+6yN1rke1XYEhf2eggRDUZmGNIGh6Hd5HiXqcVgUmhUGXaijrM9S4COYCtaX8Y1woLDfORTTRz8eaQJjUS2Cf6V/dnbqmAGNd2EAUrl8lqCQYxMEfZszCYzBY4BrcTcRyZOBKANxrLe9GBMEbdNIGAxHNeE+7W0vQXcISzDq+2xDXgX/fz0RFQIZGPuJ7FlAYPC8E1sadEQjYXAs8Anv9a0EhiWjf3Ar1dGJMwhiEvJmPgqHBxmwP4VpBR1RTxgMQaGcIHXxFEwj6I98i+pU4TNQXEKeTENuRJD9aj4W39IxccJgEAo6+RjyM59KufzNRnKsodp1vA+6+PKiG/g2CjkG5b+UqvV5UXEJg72QIPBTkS+gmFZkIzuiOQszqV+uLC1GEURKgvIPluUwjz6JSxi8HQUSgdaLP8huOkZBWUl1VaBhBG7HrOhCHo3J3vZydKMyo2FCRIXB3ih+AGRNvizb6RgF5SVUbDTM4SiEOQsGIo1ghre9DAUWPZnR+fsFUWHQTVCo5FuUIwzVyIaogW4KwV06bX6ICuqClgafQrUQjQQJC4ORqMEkKATVlgdGGFfYeasVjdthAUFoNKjuwqYMztvvCAuDQch9CLIVWPFSI4zLm/TGlM/5RYL+BgA3YC7E1AgLAz/U9CVUpszIlsF5T6ABropVadoMrkCFV3yWorD4V927G53iC4ORyDILakNtkVzZMoPaVmNFwxWGnJYAuwT459D2MvT7NDtBivjCoIugpuFDOc2lVY6kWHHy7TACqcL7UXz1d6hjrJlEt3qMcoxdTBBdCIHnwOwEKeP/M8PtpdbmMZE2GIOSqMoqEKYBv0Dz/1HOc2kG14XbSXj6McBbI2OfAy4PbS/HXIiZ4QuD6aGxsvQ8/AmyZt+c90Ta4DQkCF4ALsx5Ls0y1jHWbvv0w5GxOuy6voigZBkEOQdPtnkOo0UGIFX11NBYu//grNkNfAPVafxxznNphS+iVOCN1C83XzRcNo1281W+ggySvrvyEqqzIX1BYEuDDBkE9FJd/nx3TnNph9tQQYsT0I/r1Pq758pgFEV3PLqIjqU8gncY7piCdrTIBajVmZ8aHy5iCrIRfArTCDJnABIGYbpcOxYYvwrTXKp90kViGCoj5teD+DDl6jA1GXe0YavW/ZkE/6NNqB17WBCsQMsm8xrkwABq+y0Oc+1YYDYQVG7+CjLMFYn9kF3Dr8hzGarKUybe6RhbBzzWwjEmAN8MbT+P/l8+vrHQ0pFzYgAK4ghXs8kq+SRJrkGq92Ckhh6U73T+nxFII/ATbG6lup5kWXClK6+n+SjVLuB7xP9flmM2gtwZAPyZaom9b05z6YQ1BDn33cCVOc7FZzDSCPxqUc9QHs9BmB7clY1aqXGxkPj6BytQQJEJgpzxXYvhiMNxeUwkARYRhMzOJt9qPKALILxk+Rpa0pSNOWipE2YbzfdRWIAMvC6Wo+7ItjQoAL4wGB4aK3pYbBx3Ud1X70KyyapzcTnVmXa3A1flNJdOGEOwxAmzlupiJ3F8m3ijrr80MGNhQQiHI/uMp3xGRJ8lodejUGhr1syiOsHmRcopCEACbbxj/LYGnxuIqhJ9POZ9WxoUEF8YPIvUWNAasTuX2XTOrVT/wGYRWPGzYB+kFYRDpG+ifN4D0NLgRMf4BhTbEccE4OfAyTHvr0AagS0NCoYvDHZQ3YLb5UqC4guJrVQvFYYCZ2V4/kup/o62UV6t4KO4l1mL0d/lYi5qdRYngG9BGkErLkkjI6LFTXymOvadhfrYFX0J8cvI9nSy0Q56UM5BmOsoZ+m4MejCjrIZhVJH6UYh4QupbsG2Cngf8BpUCOUM4NFEZ2okRlgYbCEogDqN2oizeSiCruhxCPdQnXk5GPhQBuf9JNWC8hmqta0y8UnchuTvUx2CvA8KJ76Dao/B3Sj0+ipkPH3F+5z13igwYWHwKkqlfRhd8LND7x1K4CZzZa8ViW3U+sDfTbpLnFkoJTfMTZSzdNxUajUc0PLrS6HtE7yxS4DRofFHkBfhZMqZUdpviRan2IRSg0El031DWE9on6LbDaC2QEuciywpohfPVspRo8BF3FLwbO95PHAjWhZMiuzzKAoxXoJROlyVan7lPR9EYBEOF7aI/gCKyCpqjVw9pFMIpYfqehBQ3tJxJxJvX9mIhN79uBvwrkN1Cxc53jNKgEsYDCfoUnMysh2EMxsnUXwj4kZqo/1mko4gm0NtLcAytvwaAZxb5/2dyGbgqni0DmkE16cwLyMjXMLgbuDf0T/4SGRDCBennEp2zTM64beOsaS7B+9H9RIKZLy8N+HzZMF8ZBtqlTWo/NwNyU7HyJq4gpbfQ26xOHqSn0riuNT0pIXB31NrQ3mA8lnNJ+F2JTbDQkwj6BPUq267hvh175EUv86/q9rwRJIt3nKEY2ylY6zofJJqj0CzPIw1Pu0z1BMGK5FByPXjnkbyd9mkcZXkmkp1UEynRG0Qm2kugadITKPajdwsd6Pfx6pkp2PkRaO694tQNqCLLGP+22Eb7h4QScVJjKc23ftxylXODJRV2I5B+BdYHEGfopkmGKvQXSDKTNyNNYrCbuAPjvGkNIPx1FbuibYtLzqnURss5eJiVPTGdxveTWvFTYwS0IwwuBP3P34SqvBbZJ5zjEULdbSLS8NwdSouKkNRYZF67AZOQp2PnydYGv6cctpGjDo02x7rP3ALhCxi/jvhRcdYUrkVLg3j6YSOnQUXUj/u4vfInuBHUk4kqG0Qraht9AGaFQYrgM8QRCf6zKA2+q5IvOwYSypgyqVhxKX2Fo2J1E/t/jVyH98XGgu3Qivy8tBok1YaZ95JbWOLLqoDkoqGqxdgUq5Fl1ApS1OUC4lfLq1BAj5aheivQq9fm8akjHxptYvujcCDkbFpVHfNLRKuXIROOwf7uO6OnTQizYqZxC/v1qD/558d7/nG0pspVzs7o0lavTDuRvX97o2Mzye+FHaeJHXhRxlIeVXl83FrR79FBmGXIAA4ILSfVSrqg7RzsUTz2kEq8yWOffPGpc4mZfxyaR1Fj8qcizuU/AXgn3C7Yn1Ges97JjwnoyC0e+dchUpdh5lGPtWI6+HyHLiMiq2ym3TtEWnQRbzR8Czc4ds+wwnK6aelbRk50+4/9s/I97wiMn4+xep16HL//SmhY+9wjA13jBWFc3FnJS5AVZnq8TrMrdjn6UTKr6K6LRuoJt5Fjn3zYCju5JtnEzr+C46xoramiytwupbmvEHmPegHdKryraO2J8A0VDw1b8bhDqpxJTC1gyvaMKnoxqSZi7vA6cU05wEp8vLHSIhOhcFWVAf/lsj4ebgr4mRJXK3GpEKGXcdJMiMyKUbhboayiNplXhxDkpuOUVSSMAatQ/EHYcaTv3bgqsa0huSyCl3uNVcrsrw5Afe8WulUHf6d7O5sOkZRScoyvIbaQphxffqy4m2OsccIOjV3ykZqLfDjKF5fiTmOscVU95ZoRNhomEZRWaMAJCUMtqD89jBjab+UVqdMpjqW3qfdtNuJqIloeO28ndqQ3UkUq4v1TNxFaFxdkeqxM4G5GAUnSZ/xg8DSyNhs8qmk3IPbZuEqdtKIk1GC1sHUahUu4VKkYrGzqQ2EepDaFnSNCMdm2DKhj5KkMHgC5cdfGxqbgLoNZY0rk/JOWlONJ6K/5VqUgHSpYx9XoM47WjhHmozC3TPzjjaOFRYGr7Y3HaPoJB1N9gzwn5GxoxM+RyPi6jP+B8250cag2n73ETSROYmgNsIwJChm4F6PT6EYLsapuLsou6pWNeJ5AsF3OMXMQzE6ZFDjXVpmr8j2och+kFUVoNnUGvGeQw1A6zEJXdwfonbdPxFdAJOQUdR1x/XpRi3tb21yvmnhmuMGWtOOfF4G/ui9PhpVRbZKR32MNITBD9DF5BsPx6N1dBbCYAzuJcLt1FYtHoXmdii62x1OfLnwa1ucxwzyFwYurWAj7edm/DH02lVByig5aQiDPwH/FRmbQq1xMQ3m4HZnrkKh0oehZcQklJ+fluV/GtlqQ1H2wx0AtaWDY4bjKv7SwXGMgpKGMAC4Bl1oZ3rbWXVujqv0+23vkRUTgKPQ95AHY3F7NX7fwTHDxtK9OziOUVDSSkf9C9XZgWNJP1S3h2wbu6xBPSWW4O48lWf25oEx4893cMxwI9tjcHdiNkpMWpoBVMezTwLeSHJJQi7eTfIxDWvRRbARBRhtRULuObRu9uMOjqG28/JhyC6RR5HUONtHXBWjZtiAtINu1Fbuhx0cyyggaQqDKGknLr2zyf3Wo+aov0RpyPOojYXYjNyLi2iuyKlvoAzXCzgIWfSzsJVEiQuJ7qRG425UNdlf8u2PNEurb9BHSLNqTTS3P81c/27grxvsswG1Dj8F2TJ+itR813fwHeC7NF/teBfubkr1XJBpEldkpdP/dzhG4QuoVJrRR0hTM7gHJe70eNtpJvBMJN4m8TLwM+Ar1K7txxEU+vR5CtkBWuVRx9hb2jhOEsQVa+20LsF9yAj5Bm/bvAp9iDQ1gxtQcIpPmgUy4rwVLwMLUQaly8h3EPC3kbFnqE1Aaoa4lOY8ohHjvutOtbPfU60d/C21QWZGScmyuGWaqa/RBqg+16FCK3G4tJXtbc7hCcfYBJLr+twKcVWaR8aMt0I4mOrTwN8lcEyjAGQpDJKoShyHy3r+EPD5Bp9zra3brXcQV2Y8j+pHcf/XOJdjK6ygOubgfVjcQZ8gTWHwQaprECZVlThKF26X4s+p3wcA3Cpuuxb37birDIe9KGNR2HPaxGlhcRpUK7xMtU3lE7irLhslI01hMA14b2jbpUYnwWDcwUYPNPHZJP/+3bgNauGlyGSyCUaKE2jhTsqd8COqcxXmUNzK0EaTpCkMwj+W9bRnlOuEZoJ9XD7yTtqmuewNYWNeXFpx0rjKuAO8nmSKr2xCpdN8Pk5j165RcNIUBuGLaj3pRR/uwJ1O24zb1HUn3w8lNbWDKy4hLAzeQzbehXoJUkckdI5vUC3wP0oyNgkjJ9ISBudS/aNbldJ5QOq5644cF5Ib5jnH2OEodLodXLUCfcPpFLS2zqJTc73GqO8imaYoj6HgLJ9TUA9O67FQUtISBq8nWMdvRQFIaeLSOlzVkaPEGRjbXVe7LgTfcDrfe84irXl9nfO8FWkoSfAlqj0LJwCHJHRsI2PSEAZdVF8Uv8Ed8JMkGxxjzYQCb8G9xGh3Xe264x6EOlT7WX7tVBpqlU3Ut9F8IKHzvAJ8JjJ2EdmlrBsJkoYwOJ7q/n23pXCOKK4LbDKNBcIfgMcd44fTXgakK4jpfOBz3uttSDhmQT0BPIvk1vdLkXfB54PUD/QyCkrSwmAI1dWB19NenH+r+LUFwoyjuWKsv3aMTUOly1olmucQZTW15dfSol6NwtcDH0vwXGdRLZBH4+5zaRSYJIXBCOAqqtuqLcFtpEuaXbgLnvbQ+A54F+5+CifSmldhDI1Djxc3eD9J7qK+4JlLMuHJICPpqQTG0qNRVqPZD0pEksKgB/mbfTbReueeTlhMbR/FI1C143o8gbsB6TFIxW+WI6i/Vr6XanU6bV6ifkXoA1D0oM+ByLbRrjdgLdU3gvejlHGzH5SEpITBCFRpKMz3SbeyUZSncN9556AlQz0WAvc7xs+h+SYw9ZYVu4CvN3mcJFlC/UrGZxFcrK9Fto2LOzjftcBloe2jkbZoAUlloFKpJPE4ulLNryuVyuCEjt3KY3SlUnm8UsuVTXz22Eql8qzjs09WKpXjGnx2Ysx5fRbm8F34j5/VmVelUqn81NuvKzQ2scNzfj1yjl9UKpWDc/wO7NHEIwnNYCTVrqrdqN13FsE1UbYCVzvGj6PxHX4ZUmujobxjUXDNRXU+O5342ITNyB+fF9Hu2FFmo+8m3EPxejoLTDqP6iXRDKQhmA2hyCQgUWZUqrkxbwlXqVSWVWpZU6lUDmvisx+vVCpPOz6/s1Kp/LhSqUyK7D+wUqnc4djf55Kcv4uBlUrlvjrzi+OuSqUyvMNzR7US0xAK/OhUMzgQWd3DFKFq7udRzkKYdwDfpHFk4tXIsBaNBxiMIuyWomKpvudgCu4uTqC4giw9CC5201g7cPEe1J8yrhdFM0TtML6G0MiGY+TAwM9+9rOdfP4twILQ9krkUsq7U+/vUUptNOjoDUgo/IH68fsbUBv2oageQbh4x+tQUNIRyCJ/FPEC5j6U0JM3j6Feka0GGo0EPoz+3tehOgl7ABWU8elnfQ4E9kTf157IJXsMylGJui/fjKIyHyWfMvJGDHtUKpVOPv82qoNNFqMItCIwAgUUudbyW4DlyPod7Rod5RrkQ2+Ha4DT2/xs0sxFXpOkeJ4gMWsgrccsLEe2hbTqXBgt0ml15OgyoxtJ/ai/Pw+2oyawX3S8dyCKiZgB/A4Vbt2A7lS70N/1KrrLvb6DOaRZEbpVrkMxF3FLmlbp5Hu5GfgJ7ZeYM1Igac0ApB2cQu2aPQ/G4849yIqtqEZg2olazXIF1XkjPg1B4/MAAAF8SURBVKuRx2MNqgtZrzFK9Abgb0c/0xt532cIEtRPNpirkTGdagauqkDHodDcK1El3TxcjD5xzUR8rgcuR3co3y4Q/fHuQOrwAIIOQuEfeq+3z0loSRAOsBmNDJJXoA5Oed4Jp1CdN+KzEhn1/M5PWQaKGQWiU81gJPqhnxLz/lr0Y1tL0KvQ71HYiyz0A9Cac2Do9Z6RMbx9h3jbg733Bkce/md2o4pCxxE0cYlyC4owfLa1P7ku/4yMbcc63lvvPbZ459wO/C/6LsI+fv9vHkLw/UT/Xv91V2Rff2zP0OvBaLkyAfey5cvAhe39uUZfolNhALr7fQb9KPemHN15bwIuIJ274L7AaajByOwUjp8UdyNV/bcUw+Nh5EwSwiBMN3AGuuvvRMsQX70eFHqGeJU7Sm/kOQ7X+zsJ3Jy9BHfSr5L+mnVfVN1oX4Lux9HvIEyvN94bGRsQeR1+dh3DtR0+Dmj5dAcSikMphn3HyJmkhYFRDqx7slHD/wEchB87diYJsgAAAABJRU5ErkJggg=="/>
    </defs>
    </svg>
  </a>
  <p class="aside__scroll-indicator scroll-indicator">
    <span class="scroll-indicator__number scroll-indicator__number--current">01</span>
    <span class="scroll-indicator__line">
      <span class="scroll-indicator__line--fill"></span>
    </span>
    <span class="scroll-indicator__number scroll-indicator__number--total"><?= $sectionCount ?></span>
  </p>
  <p class="aside__socials socials">
    <a href="">Fb</a>
    <a href="">Vk</a>
    <a href="">Inst</a>
  </p>
  <button class="aside__burger">
    <span></span>
  </button>
</aside>