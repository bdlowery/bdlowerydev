   <!-- end .page-content -->
   </main>

   <?php
   $updatedDate = get_latest_update_date();
   $updatedDateDatetime = get_latest_update_date_datetime();
   ?>

   <footer class='bg-zinc-900 py-10 overflow-hidden relative z-[1]'>
      <div class="background-grain"></div>
      <div class="container max-w-5xl mx-auto px-4 sm:px-16">
         <div class="text-white flex flex-row justify-between">
            <div class="grid gap-8 links-group">
               <ul class='flex flex-row flex-wrap gap-6'>
                  <li>
                     <a class=' -mx-2 -my-1 px-2 py-1 underline decoration-sky-500 hover:text-sky-500 hover:no-underline' href="https://x.com/bdlowery2">x</a>
                  </li>
                  <li>
                     <a class='-mx-2 -my-1 px-2 py-1 underline decoration-sky-500 hover:text-sky-500 hover:no-underline' href="https://www.linkedin.com/in/bdlowery">linkedin</a>
                  </li>

                  <li>
                     <a class='-mx-2 -my-1 px-2 py-1 underline decoration-sky-500 hover:text-sky-500 hover:no-underline' href="https://github.com/bdlowery">github</a>
                  </li>
                  <li>
                     <a class='-mx-2 -my-1 px-2 py-1 underline decoration-sky-500 hover:text-sky-500 hover:no-underline' href="https://codepen.io/bdlowery">codepen</a>
                  </li>

               </ul>
               <span class='last-updated'>Last updated: <time datetime="<?= $updatedDateDatetime ?>"><?= $updatedDate; ?></time></span>
            </div>

            <!-- <div class="account-group">
               <ul class='account-links'>
                  <li>
                     <?php
                     //display logout link
                     // if (is_user_logged_in()) {
                     //    wp_loginout(home_url()); 
                     // }
                     // else { 
                     ?>
                        <a href="sign-in">sign-in</a>
                     <?php // }
                     ?>
                  </li>
               </ul>
            </div> -->
         </div>
      </div>
   </footer>
   <script>
      // function setupHighlighting() {
      //    /* PrismJS 1.29.0
      //    https://prismjs.com/download.html#themes=prism&languages=markup+css+clike+javascript+elixir+handlebars+markup-templating+php+stylus&plugins=keep-markup+normalize-whitespace+toolbar */
      //    var _self = "undefined" != typeof window ? window : "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? self : {},
      //       Prism = function(e) {
      //          var n = /(?:^|\s)lang(?:uage)?-([\w-]+)(?=\s|$)/i,
      //             t = 0,
      //             r = {},
      //             a = {
      //                manual: e.Prism && e.Prism.manual,
      //                disableWorkerMessageHandler: e.Prism && e.Prism.disableWorkerMessageHandler,
      //                util: {
      //                   encode: function e(n) {
      //                      return n instanceof i ? new i(n.type, e(n.content), n.alias) : Array.isArray(n) ? n.map(e) : n.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/\u00a0/g, " ")
      //                   },
      //                   type: function(e) {
      //                      return Object.prototype.toString.call(e).slice(8, -1)
      //                   },
      //                   objId: function(e) {
      //                      return e.__id || Object.defineProperty(e, "__id", {
      //                         value: ++t
      //                      }), e.__id
      //                   },
      //                   clone: function e(n, t) {
      //                      var r, i;
      //                      switch (t = t || {}, a.util.type(n)) {
      //                         case "Object":
      //                            if (i = a.util.objId(n), t[i]) return t[i];
      //                            for (var l in r = {}, t[i] = r, n) n.hasOwnProperty(l) && (r[l] = e(n[l], t));
      //                            return r;
      //                         case "Array":
      //                            return i = a.util.objId(n), t[i] ? t[i] : (r = [], t[i] = r, n.forEach((function(n, a) {
      //                               r[a] = e(n, t)
      //                            })), r);
      //                         default:
      //                            return n
      //                      }
      //                   },
      //                   getLanguage: function(e) {
      //                      for (; e;) {
      //                         var t = n.exec(e.className);
      //                         if (t) return t[1].toLowerCase();
      //                         e = e.parentElement
      //                      }
      //                      return "none"
      //                   },
      //                   setLanguage: function(e, t) {
      //                      e.className = e.className.replace(RegExp(n, "gi"), ""), e.classList.add("language-" + t)
      //                   },
      //                   currentScript: function() {
      //                      if ("undefined" == typeof document) return null;
      //                      if ("currentScript" in document) return document.currentScript;
      //                      try {
      //                         throw new Error
      //                      } catch (r) {
      //                         var e = (/at [^(\r\n]*\((.*):[^:]+:[^:]+\)$/i.exec(r.stack) || [])[1];
      //                         if (e) {
      //                            var n = document.getElementsByTagName("script");
      //                            for (var t in n)
      //                               if (n[t].src == e) return n[t]
      //                         }
      //                         return null
      //                      }
      //                   },
      //                   isActive: function(e, n, t) {
      //                      for (var r = "no-" + n; e;) {
      //                         var a = e.classList;
      //                         if (a.contains(n)) return !0;
      //                         if (a.contains(r)) return !1;
      //                         e = e.parentElement
      //                      }
      //                      return !!t
      //                   }
      //                },
      //                languages: {
      //                   plain: r,
      //                   plaintext: r,
      //                   text: r,
      //                   txt: r,
      //                   extend: function(e, n) {
      //                      var t = a.util.clone(a.languages[e]);
      //                      for (var r in n) t[r] = n[r];
      //                      return t
      //                   },
      //                   insertBefore: function(e, n, t, r) {
      //                      var i = (r = r || a.languages)[e],
      //                         l = {};
      //                      for (var o in i)
      //                         if (i.hasOwnProperty(o)) {
      //                            if (o == n)
      //                               for (var s in t) t.hasOwnProperty(s) && (l[s] = t[s]);
      //                            t.hasOwnProperty(o) || (l[o] = i[o])
      //                         } var u = r[e];
      //                      return r[e] = l, a.languages.DFS(a.languages, (function(n, t) {
      //                         t === u && n != e && (this[n] = l)
      //                      })), l
      //                   },
      //                   DFS: function e(n, t, r, i) {
      //                      i = i || {};
      //                      var l = a.util.objId;
      //                      for (var o in n)
      //                         if (n.hasOwnProperty(o)) {
      //                            t.call(n, o, n[o], r || o);
      //                            var s = n[o],
      //                               u = a.util.type(s);
      //                            "Object" !== u || i[l(s)] ? "Array" !== u || i[l(s)] || (i[l(s)] = !0, e(s, t, o, i)) : (i[l(s)] = !0, e(s, t, null, i))
      //                         }
      //                   }
      //                },
      //                plugins: {},
      //                highlightAll: function(e, n) {
      //                   a.highlightAllUnder(document, e, n)
      //                },
      //                highlightAllUnder: function(e, n, t) {
      //                   var r = {
      //                      callback: t,
      //                      container: e,
      //                      selector: 'code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code'
      //                   };
      //                   a.hooks.run("before-highlightall", r), r.elements = Array.prototype.slice.apply(r.container.querySelectorAll(r.selector)), a.hooks.run("before-all-elements-highlight", r);
      //                   for (var i, l = 0; i = r.elements[l++];) a.highlightElement(i, !0 === n, r.callback)
      //                },
      //                highlightElement: function(n, t, r) {
      //                   var i = a.util.getLanguage(n),
      //                      l = a.languages[i];
      //                   a.util.setLanguage(n, i);
      //                   var o = n.parentElement;
      //                   o && "pre" === o.nodeName.toLowerCase() && a.util.setLanguage(o, i);
      //                   var s = {
      //                      element: n,
      //                      language: i,
      //                      grammar: l,
      //                      code: n.textContent
      //                   };

      //                   function u(e) {
      //                      s.highlightedCode = e, a.hooks.run("before-insert", s), s.element.innerHTML = s.highlightedCode, a.hooks.run("after-highlight", s), a.hooks.run("complete", s), r && r.call(s.element)
      //                   }
      //                   if (a.hooks.run("before-sanity-check", s), (o = s.element.parentElement) && "pre" === o.nodeName.toLowerCase() && !o.hasAttribute("tabindex") && o.setAttribute("tabindex", "0"), !s.code) return a.hooks.run("complete", s), void(r && r.call(s.element));
      //                   if (a.hooks.run("before-highlight", s), s.grammar)
      //                      if (t && e.Worker) {
      //                         var c = new Worker(a.filename);
      //                         c.onmessage = function(e) {
      //                            u(e.data)
      //                         }, c.postMessage(JSON.stringify({
      //                            language: s.language,
      //                            code: s.code,
      //                            immediateClose: !0
      //                         }))
      //                      } else u(a.highlight(s.code, s.grammar, s.language));
      //                   else u(a.util.encode(s.code))
      //                },
      //                highlight: function(e, n, t) {
      //                   var r = {
      //                      code: e,
      //                      grammar: n,
      //                      language: t
      //                   };
      //                   if (a.hooks.run("before-tokenize", r), !r.grammar) throw new Error('The language "' + r.language + '" has no grammar.');
      //                   return r.tokens = a.tokenize(r.code, r.grammar), a.hooks.run("after-tokenize", r), i.stringify(a.util.encode(r.tokens), r.language)
      //                },
      //                tokenize: function(e, n) {
      //                   var t = n.rest;
      //                   if (t) {
      //                      for (var r in t) n[r] = t[r];
      //                      delete n.rest
      //                   }
      //                   var a = new s;
      //                   return u(a, a.head, e), o(e, a, n, a.head, 0),
      //                      function(e) {
      //                         for (var n = [], t = e.head.next; t !== e.tail;) n.push(t.value), t = t.next;
      //                         return n
      //                      }(a)
      //                },
      //                hooks: {
      //                   all: {},
      //                   add: function(e, n) {
      //                      var t = a.hooks.all;
      //                      t[e] = t[e] || [], t[e].push(n)
      //                   },
      //                   run: function(e, n) {
      //                      var t = a.hooks.all[e];
      //                      if (t && t.length)
      //                         for (var r, i = 0; r = t[i++];) r(n)
      //                   }
      //                },
      //                Token: i
      //             };

      //          function i(e, n, t, r) {
      //             this.type = e, this.content = n, this.alias = t, this.length = 0 | (r || "").length
      //          }

      //          function l(e, n, t, r) {
      //             e.lastIndex = n;
      //             var a = e.exec(t);
      //             if (a && r && a[1]) {
      //                var i = a[1].length;
      //                a.index += i, a[0] = a[0].slice(i)
      //             }
      //             return a
      //          }

      //          function o(e, n, t, r, s, g) {
      //             for (var f in t)
      //                if (t.hasOwnProperty(f) && t[f]) {
      //                   var h = t[f];
      //                   h = Array.isArray(h) ? h : [h];
      //                   for (var d = 0; d < h.length; ++d) {
      //                      if (g && g.cause == f + "," + d) return;
      //                      var v = h[d],
      //                         p = v.inside,
      //                         m = !!v.lookbehind,
      //                         y = !!v.greedy,
      //                         k = v.alias;
      //                      if (y && !v.pattern.global) {
      //                         var x = v.pattern.toString().match(/[imsuy]*$/)[0];
      //                         v.pattern = RegExp(v.pattern.source, x + "g")
      //                      }
      //                      for (var b = v.pattern || v, w = r.next, A = s; w !== n.tail && !(g && A >= g.reach); A += w.value.length, w = w.next) {
      //                         var E = w.value;
      //                         if (n.length > e.length) return;
      //                         if (!(E instanceof i)) {
      //                            var P, L = 1;
      //                            if (y) {
      //                               if (!(P = l(b, A, e, m)) || P.index >= e.length) break;
      //                               var S = P.index,
      //                                  O = P.index + P[0].length,
      //                                  j = A;
      //                               for (j += w.value.length; S >= j;) j += (w = w.next).value.length;
      //                               if (A = j -= w.value.length, w.value instanceof i) continue;
      //                               for (var C = w; C !== n.tail && (j < O || "string" == typeof C.value); C = C.next) L++, j += C.value.length;
      //                               L--, E = e.slice(A, j), P.index -= A
      //                            } else if (!(P = l(b, 0, E, m))) continue;
      //                            S = P.index;
      //                            var N = P[0],
      //                               _ = E.slice(0, S),
      //                               M = E.slice(S + N.length),
      //                               W = A + E.length;
      //                            g && W > g.reach && (g.reach = W);
      //                            var z = w.prev;
      //                            if (_ && (z = u(n, z, _), A += _.length), c(n, z, L), w = u(n, z, new i(f, p ? a.tokenize(N, p) : N, k, N)), M && u(n, w, M), L > 1) {
      //                               var I = {
      //                                  cause: f + "," + d,
      //                                  reach: W
      //                               };
      //                               o(e, n, t, w.prev, A, I), g && I.reach > g.reach && (g.reach = I.reach)
      //                            }
      //                         }
      //                      }
      //                   }
      //                }
      //          }

      //          function s() {
      //             var e = {
      //                   value: null,
      //                   prev: null,
      //                   next: null
      //                },
      //                n = {
      //                   value: null,
      //                   prev: e,
      //                   next: null
      //                };
      //             e.next = n, this.head = e, this.tail = n, this.length = 0
      //          }

      //          function u(e, n, t) {
      //             var r = n.next,
      //                a = {
      //                   value: t,
      //                   prev: n,
      //                   next: r
      //                };
      //             return n.next = a, r.prev = a, e.length++, a
      //          }

      //          function c(e, n, t) {
      //             for (var r = n.next, a = 0; a < t && r !== e.tail; a++) r = r.next;
      //             n.next = r, r.prev = n, e.length -= a
      //          }
      //          if (e.Prism = a, i.stringify = function e(n, t) {
      //                if ("string" == typeof n) return n;
      //                if (Array.isArray(n)) {
      //                   var r = "";
      //                   return n.forEach((function(n) {
      //                      r += e(n, t)
      //                   })), r
      //                }
      //                var i = {
      //                      type: n.type,
      //                      content: e(n.content, t),
      //                      tag: "span",
      //                      classes: ["token", n.type],
      //                      attributes: {},
      //                      language: t
      //                   },
      //                   l = n.alias;
      //                l && (Array.isArray(l) ? Array.prototype.push.apply(i.classes, l) : i.classes.push(l)), a.hooks.run("wrap", i);
      //                var o = "";
      //                for (var s in i.attributes) o += " " + s + '="' + (i.attributes[s] || "").replace(/"/g, "&quot;") + '"';
      //                return "<" + i.tag + ' class="' + i.classes.join(" ") + '"' + o + ">" + i.content + "</" + i.tag + ">"
      //             }, !e.document) return e.addEventListener ? (a.disableWorkerMessageHandler || e.addEventListener("message", (function(n) {
      //             var t = JSON.parse(n.data),
      //                r = t.language,
      //                i = t.code,
      //                l = t.immediateClose;
      //             e.postMessage(a.highlight(i, a.languages[r], r)), l && e.close()
      //          }), !1), a) : a;
      //          var g = a.util.currentScript();

      //          function f() {
      //             a.manual || a.highlightAll()
      //          }
      //          if (g && (a.filename = g.src, g.hasAttribute("data-manual") && (a.manual = !0)), !a.manual) {
      //             var h = document.readyState;
      //             "loading" === h || "interactive" === h && g && g.defer ? document.addEventListener("DOMContentLoaded", f) : window.requestAnimationFrame ? window.requestAnimationFrame(f) : window.setTimeout(f, 16)
      //          }
      //          return a
      //       }(_self);
      //    "undefined" != typeof module && module.exports && (module.exports = Prism), "undefined" != typeof global && (global.Prism = Prism);
      //    Prism.languages.markup = {
      //       comment: {
      //          pattern: /<!--(?:(?!<!--)[\s\S])*?-->/,
      //          greedy: !0
      //       },
      //       prolog: {
      //          pattern: /<\?[\s\S]+?\?>/,
      //          greedy: !0
      //       },
      //       doctype: {
      //          pattern: /<!DOCTYPE(?:[^>"'[\]]|"[^"]*"|'[^']*')+(?:\[(?:[^<"'\]]|"[^"]*"|'[^']*'|<(?!!--)|<!--(?:[^-]|-(?!->))*-->)*\]\s*)?>/i,
      //          greedy: !0,
      //          inside: {
      //             "internal-subset": {
      //                pattern: /(^[^\[]*\[)[\s\S]+(?=\]>$)/,
      //                lookbehind: !0,
      //                greedy: !0,
      //                inside: null
      //             },
      //             string: {
      //                pattern: /"[^"]*"|'[^']*'/,
      //                greedy: !0
      //             },
      //             punctuation: /^<!|>$|[[\]]/,
      //             "doctype-tag": /^DOCTYPE/i,
      //             name: /[^\s<>'"]+/
      //          }
      //       },
      //       cdata: {
      //          pattern: /<!\[CDATA\[[\s\S]*?\]\]>/i,
      //          greedy: !0
      //       },
      //       tag: {
      //          pattern: /<\/?(?!\d)[^\s>\/=$<%]+(?:\s(?:\s*[^\s>\/=]+(?:\s*=\s*(?:"[^"]*"|'[^']*'|[^\s'">=]+(?=[\s>]))|(?=[\s/>])))+)?\s*\/?>/,
      //          greedy: !0,
      //          inside: {
      //             tag: {
      //                pattern: /^<\/?[^\s>\/]+/,
      //                inside: {
      //                   punctuation: /^<\/?/,
      //                   namespace: /^[^\s>\/:]+:/
      //                }
      //             },
      //             "special-attr": [],
      //             "attr-value": {
      //                pattern: /=\s*(?:"[^"]*"|'[^']*'|[^\s'">=]+)/,
      //                inside: {
      //                   punctuation: [{
      //                      pattern: /^=/,
      //                      alias: "attr-equals"
      //                   }, {
      //                      pattern: /^(\s*)["']|["']$/,
      //                      lookbehind: !0
      //                   }]
      //                }
      //             },
      //             punctuation: /\/?>/,
      //             "attr-name": {
      //                pattern: /[^\s>\/]+/,
      //                inside: {
      //                   namespace: /^[^\s>\/:]+:/
      //                }
      //             }
      //          }
      //       },
      //       entity: [{
      //          pattern: /&[\da-z]{1,8};/i,
      //          alias: "named-entity"
      //       }, /&#x?[\da-f]{1,8};/i]
      //    }, Prism.languages.markup.tag.inside["attr-value"].inside.entity = Prism.languages.markup.entity, Prism.languages.markup.doctype.inside["internal-subset"].inside = Prism.languages.markup, Prism.hooks.add("wrap", (function(a) {
      //       "entity" === a.type && (a.attributes.title = a.content.replace(/&amp;/, "&"))
      //    })), Object.defineProperty(Prism.languages.markup.tag, "addInlined", {
      //       value: function(a, e) {
      //          var s = {};
      //          s["language-" + e] = {
      //             pattern: /(^<!\[CDATA\[)[\s\S]+?(?=\]\]>$)/i,
      //             lookbehind: !0,
      //             inside: Prism.languages[e]
      //          }, s.cdata = /^<!\[CDATA\[|\]\]>$/i;
      //          var t = {
      //             "included-cdata": {
      //                pattern: /<!\[CDATA\[[\s\S]*?\]\]>/i,
      //                inside: s
      //             }
      //          };
      //          t["language-" + e] = {
      //             pattern: /[\s\S]+/,
      //             inside: Prism.languages[e]
      //          };
      //          var n = {};
      //          n[a] = {
      //             pattern: RegExp("(<__[^>]*>)(?:<!\\[CDATA\\[(?:[^\\]]|\\](?!\\]>))*\\]\\]>|(?!<!\\[CDATA\\[)[^])*?(?=</__>)".replace(/__/g, (function() {
      //                return a
      //             })), "i"),
      //             lookbehind: !0,
      //             greedy: !0,
      //             inside: t
      //          }, Prism.languages.insertBefore("markup", "cdata", n)
      //       }
      //    }), Object.defineProperty(Prism.languages.markup.tag, "addAttribute", {
      //       value: function(a, e) {
      //          Prism.languages.markup.tag.inside["special-attr"].push({
      //             pattern: RegExp("(^|[\"'\\s])(?:" + a + ")\\s*=\\s*(?:\"[^\"]*\"|'[^']*'|[^\\s'\">=]+(?=[\\s>]))", "i"),
      //             lookbehind: !0,
      //             inside: {
      //                "attr-name": /^[^\s=]+/,
      //                "attr-value": {
      //                   pattern: /=[\s\S]+/,
      //                   inside: {
      //                      value: {
      //                         pattern: /(^=\s*(["']|(?!["'])))\S[\s\S]*(?=\2$)/,
      //                         lookbehind: !0,
      //                         alias: [e, "language-" + e],
      //                         inside: Prism.languages[e]
      //                      },
      //                      punctuation: [{
      //                         pattern: /^=/,
      //                         alias: "attr-equals"
      //                      }, /"|'/]
      //                   }
      //                }
      //             }
      //          })
      //       }
      //    }), Prism.languages.html = Prism.languages.markup, Prism.languages.mathml = Prism.languages.markup, Prism.languages.svg = Prism.languages.markup, Prism.languages.xml = Prism.languages.extend("markup", {}), Prism.languages.ssml = Prism.languages.xml, Prism.languages.atom = Prism.languages.xml, Prism.languages.rss = Prism.languages.xml;
      //    ! function(s) {
      //       var e = /(?:"(?:\\(?:\r\n|[\s\S])|[^"\\\r\n])*"|'(?:\\(?:\r\n|[\s\S])|[^'\\\r\n])*')/;
      //       s.languages.css = {
      //          comment: /\/\*[\s\S]*?\*\//,
      //          atrule: {
      //             pattern: RegExp("@[\\w-](?:[^;{\\s\"']|\\s+(?!\\s)|" + e.source + ")*?(?:;|(?=\\s*\\{))"),
      //             inside: {
      //                rule: /^@[\w-]+/,
      //                "selector-function-argument": {
      //                   pattern: /(\bselector\s*\(\s*(?![\s)]))(?:[^()\s]|\s+(?![\s)])|\((?:[^()]|\([^()]*\))*\))+(?=\s*\))/,
      //                   lookbehind: !0,
      //                   alias: "selector"
      //                },
      //                keyword: {
      //                   pattern: /(^|[^\w-])(?:and|not|only|or)(?![\w-])/,
      //                   lookbehind: !0
      //                }
      //             }
      //          },
      //          url: {
      //             pattern: RegExp("\\burl\\((?:" + e.source + "|(?:[^\\\\\r\n()\"']|\\\\[^])*)\\)", "i"),
      //             greedy: !0,
      //             inside: {
      //                function: /^url/i,
      //                punctuation: /^\(|\)$/,
      //                string: {
      //                   pattern: RegExp("^" + e.source + "$"),
      //                   alias: "url"
      //                }
      //             }
      //          },
      //          selector: {
      //             pattern: RegExp("(^|[{}\\s])[^{}\\s](?:[^{};\"'\\s]|\\s+(?![\\s{])|" + e.source + ")*(?=\\s*\\{)"),
      //             lookbehind: !0
      //          },
      //          string: {
      //             pattern: e,
      //             greedy: !0
      //          },
      //          property: {
      //             pattern: /(^|[^-\w\xA0-\uFFFF])(?!\s)[-_a-z\xA0-\uFFFF](?:(?!\s)[-\w\xA0-\uFFFF])*(?=\s*:)/i,
      //             lookbehind: !0
      //          },
      //          important: /!important\b/i,
      //          function: {
      //             pattern: /(^|[^-a-z0-9])[-a-z0-9]+(?=\()/i,
      //             lookbehind: !0
      //          },
      //          punctuation: /[(){};:,]/
      //       }, s.languages.css.atrule.inside.rest = s.languages.css;
      //       var t = s.languages.markup;
      //       t && (t.tag.addInlined("style", "css"), t.tag.addAttribute("style", "css"))
      //    }(Prism);
      //    Prism.languages.clike = {
      //       comment: [{
      //          pattern: /(^|[^\\])\/\*[\s\S]*?(?:\*\/|$)/,
      //          lookbehind: !0,
      //          greedy: !0
      //       }, {
      //          pattern: /(^|[^\\:])\/\/.*/,
      //          lookbehind: !0,
      //          greedy: !0
      //       }],
      //       string: {
      //          pattern: /(["'])(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/,
      //          greedy: !0
      //       },
      //       "class-name": {
      //          pattern: /(\b(?:class|extends|implements|instanceof|interface|new|trait)\s+|\bcatch\s+\()[\w.\\]+/i,
      //          lookbehind: !0,
      //          inside: {
      //             punctuation: /[.\\]/
      //          }
      //       },
      //       keyword: /\b(?:break|catch|continue|do|else|finally|for|function|if|in|instanceof|new|null|return|throw|try|while)\b/,
      //       boolean: /\b(?:false|true)\b/,
      //       function: /\b\w+(?=\()/,
      //       number: /\b0x[\da-f]+\b|(?:\b\d+(?:\.\d*)?|\B\.\d+)(?:e[+-]?\d+)?/i,
      //       operator: /[<>]=?|[!=]=?=?|--?|\+\+?|&&?|\|\|?|[?*/~^%]/,
      //       punctuation: /[{}[\];(),.:]/
      //    };
      //    Prism.languages.javascript = Prism.languages.extend("clike", {
      //       "class-name": [Prism.languages.clike["class-name"], {
      //          pattern: /(^|[^$\w\xA0-\uFFFF])(?!\s)[_$A-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\.(?:constructor|prototype))/,
      //          lookbehind: !0
      //       }],
      //       keyword: [{
      //          pattern: /((?:^|\})\s*)catch\b/,
      //          lookbehind: !0
      //       }, {
      //          pattern: /(^|[^.]|\.\.\.\s*)\b(?:as|assert(?=\s*\{)|async(?=\s*(?:function\b|\(|[$\w\xA0-\uFFFF]|$))|await|break|case|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally(?=\s*(?:\{|$))|for|from(?=\s*(?:['"]|$))|function|(?:get|set)(?=\s*(?:[#\[$\w\xA0-\uFFFF]|$))|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|static|super|switch|this|throw|try|typeof|undefined|var|void|while|with|yield)\b/,
      //          lookbehind: !0
      //       }],
      //       function: /#?(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*(?:\.\s*(?:apply|bind|call)\s*)?\()/,
      //       number: {
      //          pattern: RegExp("(^|[^\\w$])(?:NaN|Infinity|0[bB][01]+(?:_[01]+)*n?|0[oO][0-7]+(?:_[0-7]+)*n?|0[xX][\\dA-Fa-f]+(?:_[\\dA-Fa-f]+)*n?|\\d+(?:_\\d+)*n|(?:\\d+(?:_\\d+)*(?:\\.(?:\\d+(?:_\\d+)*)?)?|\\.\\d+(?:_\\d+)*)(?:[Ee][+-]?\\d+(?:_\\d+)*)?)(?![\\w$])"),
      //          lookbehind: !0
      //       },
      //       operator: /--|\+\+|\*\*=?|=>|&&=?|\|\|=?|[!=]==|<<=?|>>>?=?|[-+*/%&|^!=<>]=?|\.{3}|\?\?=?|\?\.?|[~:]/
      //    }), Prism.languages.javascript["class-name"][0].pattern = /(\b(?:class|extends|implements|instanceof|interface|new)\s+)[\w.\\]+/, Prism.languages.insertBefore("javascript", "keyword", {
      //       regex: {
      //          pattern: RegExp("((?:^|[^$\\w\\xA0-\\uFFFF.\"'\\])\\s]|\\b(?:return|yield))\\s*)/(?:(?:\\[(?:[^\\]\\\\\r\n]|\\\\.)*\\]|\\\\.|[^/\\\\\\[\r\n])+/[dgimyus]{0,7}|(?:\\[(?:[^[\\]\\\\\r\n]|\\\\.|\\[(?:[^[\\]\\\\\r\n]|\\\\.|\\[(?:[^[\\]\\\\\r\n]|\\\\.)*\\])*\\])*\\]|\\\\.|[^/\\\\\\[\r\n])+/[dgimyus]{0,7}v[dgimyus]{0,7})(?=(?:\\s|/\\*(?:[^*]|\\*(?!/))*\\*/)*(?:$|[\r\n,.;:})\\]]|//))"),
      //          lookbehind: !0,
      //          greedy: !0,
      //          inside: {
      //             "regex-source": {
      //                pattern: /^(\/)[\s\S]+(?=\/[a-z]*$)/,
      //                lookbehind: !0,
      //                alias: "language-regex",
      //                inside: Prism.languages.regex
      //             },
      //             "regex-delimiter": /^\/|\/$/,
      //             "regex-flags": /^[a-z]+$/
      //          }
      //       },
      //       "function-variable": {
      //          pattern: /#?(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*[=:]\s*(?:async\s*)?(?:\bfunction\b|(?:\((?:[^()]|\([^()]*\))*\)|(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*)\s*=>))/,
      //          alias: "function"
      //       },
      //       parameter: [{
      //          pattern: /(function(?:\s+(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*)?\s*\(\s*)(?!\s)(?:[^()\s]|\s+(?![\s)])|\([^()]*\))+(?=\s*\))/,
      //          lookbehind: !0,
      //          inside: Prism.languages.javascript
      //       }, {
      //          pattern: /(^|[^$\w\xA0-\uFFFF])(?!\s)[_$a-z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*=>)/i,
      //          lookbehind: !0,
      //          inside: Prism.languages.javascript
      //       }, {
      //          pattern: /(\(\s*)(?!\s)(?:[^()\s]|\s+(?![\s)])|\([^()]*\))+(?=\s*\)\s*=>)/,
      //          lookbehind: !0,
      //          inside: Prism.languages.javascript
      //       }, {
      //          pattern: /((?:\b|\s|^)(?!(?:as|async|await|break|case|catch|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally|for|from|function|get|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|set|static|super|switch|this|throw|try|typeof|undefined|var|void|while|with|yield)(?![$\w\xA0-\uFFFF]))(?:(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*\s*)\(\s*|\]\s*\(\s*)(?!\s)(?:[^()\s]|\s+(?![\s)])|\([^()]*\))+(?=\s*\)\s*\{)/,
      //          lookbehind: !0,
      //          inside: Prism.languages.javascript
      //       }],
      //       constant: /\b[A-Z](?:[A-Z_]|\dx?)*\b/
      //    }), Prism.languages.insertBefore("javascript", "string", {
      //       hashbang: {
      //          pattern: /^#!.*/,
      //          greedy: !0,
      //          alias: "comment"
      //       },
      //       "template-string": {
      //          pattern: /`(?:\\[\s\S]|\$\{(?:[^{}]|\{(?:[^{}]|\{[^}]*\})*\})+\}|(?!\$\{)[^\\`])*`/,
      //          greedy: !0,
      //          inside: {
      //             "template-punctuation": {
      //                pattern: /^`|`$/,
      //                alias: "string"
      //             },
      //             interpolation: {
      //                pattern: /((?:^|[^\\])(?:\\{2})*)\$\{(?:[^{}]|\{(?:[^{}]|\{[^}]*\})*\})+\}/,
      //                lookbehind: !0,
      //                inside: {
      //                   "interpolation-punctuation": {
      //                      pattern: /^\$\{|\}$/,
      //                      alias: "punctuation"
      //                   },
      //                   rest: Prism.languages.javascript
      //                }
      //             },
      //             string: /[\s\S]+/
      //          }
      //       },
      //       "string-property": {
      //          pattern: /((?:^|[,{])[ \t]*)(["'])(?:\\(?:\r\n|[\s\S])|(?!\2)[^\\\r\n])*\2(?=\s*:)/m,
      //          lookbehind: !0,
      //          greedy: !0,
      //          alias: "property"
      //       }
      //    }), Prism.languages.insertBefore("javascript", "operator", {
      //       "literal-property": {
      //          pattern: /((?:^|[,{])[ \t]*)(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*:)/m,
      //          lookbehind: !0,
      //          alias: "property"
      //       }
      //    }), Prism.languages.markup && (Prism.languages.markup.tag.addInlined("script", "javascript"), Prism.languages.markup.tag.addAttribute("on(?:abort|blur|change|click|composition(?:end|start|update)|dblclick|error|focus(?:in|out)?|key(?:down|up)|load|mouse(?:down|enter|leave|move|out|over|up)|reset|resize|scroll|select|slotchange|submit|unload|wheel)", "javascript")), Prism.languages.js = Prism.languages.javascript;
      //    Prism.languages.elixir = {
      //       doc: {
      //          pattern: /@(?:doc|moduledoc)\s+(?:("""|''')[\s\S]*?\1|("|')(?:\\(?:\r\n|[\s\S])|(?!\2)[^\\\r\n])*\2)/,
      //          inside: {
      //             attribute: /^@\w+/,
      //             string: /['"][\s\S]+/
      //          }
      //       },
      //       comment: {
      //          pattern: /#.*/,
      //          greedy: !0
      //       },
      //       regex: {
      //          pattern: /~[rR](?:("""|''')(?:\\[\s\S]|(?!\1)[^\\])+\1|([\/|"'])(?:\\.|(?!\2)[^\\\r\n])+\2|\((?:\\.|[^\\)\r\n])+\)|\[(?:\\.|[^\\\]\r\n])+\]|\{(?:\\.|[^\\}\r\n])+\}|<(?:\\.|[^\\>\r\n])+>)[uismxfr]*/,
      //          greedy: !0
      //       },
      //       string: [{
      //          pattern: /~[cCsSwW](?:("""|''')(?:\\[\s\S]|(?!\1)[^\\])+\1|([\/|"'])(?:\\.|(?!\2)[^\\\r\n])+\2|\((?:\\.|[^\\)\r\n])+\)|\[(?:\\.|[^\\\]\r\n])+\]|\{(?:\\.|#\{[^}]+\}|#(?!\{)|[^#\\}\r\n])+\}|<(?:\\.|[^\\>\r\n])+>)[csa]?/,
      //          greedy: !0,
      //          inside: {}
      //       }, {
      //          pattern: /("""|''')[\s\S]*?\1/,
      //          greedy: !0,
      //          inside: {}
      //       }, {
      //          pattern: /("|')(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/,
      //          greedy: !0,
      //          inside: {}
      //       }],
      //       atom: {
      //          pattern: /(^|[^:]):\w+/,
      //          lookbehind: !0,
      //          alias: "symbol"
      //       },
      //       module: {
      //          pattern: /\b[A-Z]\w*\b/,
      //          alias: "class-name"
      //       },
      //       "attr-name": /\b\w+\??:(?!:)/,
      //       argument: {
      //          pattern: /(^|[^&])&\d+/,
      //          lookbehind: !0,
      //          alias: "variable"
      //       },
      //       attribute: {
      //          pattern: /@\w+/,
      //          alias: "variable"
      //       },
      //       function: /\b[_a-zA-Z]\w*[?!]?(?:(?=\s*(?:\.\s*)?\()|(?=\/\d))/,
      //       number: /\b(?:0[box][a-f\d_]+|\d[\d_]*)(?:\.[\d_]+)?(?:e[+-]?[\d_]+)?\b/i,
      //       keyword: /\b(?:after|alias|and|case|catch|cond|def(?:callback|delegate|exception|impl|macro|module|n|np|p|protocol|struct)?|do|else|end|fn|for|if|import|not|or|quote|raise|require|rescue|try|unless|unquote|use|when)\b/,
      //       boolean: /\b(?:false|nil|true)\b/,
      //       operator: [/\bin\b|&&?|\|[|>]?|\\\\|::|\.\.\.?|\+\+?|-[->]?|<[-=>]|>=|!==?|\B!|=(?:==?|[>~])?|[*\/^]/, {
      //          pattern: /([^<])<(?!<)/,
      //          lookbehind: !0
      //       }, {
      //          pattern: /([^>])>(?!>)/,
      //          lookbehind: !0
      //       }],
      //       punctuation: /<<|>>|[.,%\[\]{}()]/
      //    }, Prism.languages.elixir.string.forEach((function(e) {
      //       e.inside = {
      //          interpolation: {
      //             pattern: /#\{[^}]+\}/,
      //             inside: {
      //                delimiter: {
      //                   pattern: /^#\{|\}$/,
      //                   alias: "punctuation"
      //                },
      //                rest: Prism.languages.elixir
      //             }
      //          }
      //       }
      //    }));
      //    ! function(e) {
      //       function n(e, n) {
      //          return "___" + e.toUpperCase() + n + "___"
      //       }
      //       Object.defineProperties(e.languages["markup-templating"] = {}, {
      //          buildPlaceholders: {
      //             value: function(t, a, r, o) {
      //                if (t.language === a) {
      //                   var c = t.tokenStack = [];
      //                   t.code = t.code.replace(r, (function(e) {
      //                      if ("function" == typeof o && !o(e)) return e;
      //                      for (var r, i = c.length; - 1 !== t.code.indexOf(r = n(a, i));) ++i;
      //                      return c[i] = e, r
      //                   })), t.grammar = e.languages.markup
      //                }
      //             }
      //          },
      //          tokenizePlaceholders: {
      //             value: function(t, a) {
      //                if (t.language === a && t.tokenStack) {
      //                   t.grammar = e.languages[a];
      //                   var r = 0,
      //                      o = Object.keys(t.tokenStack);
      //                   ! function c(i) {
      //                      for (var u = 0; u < i.length && !(r >= o.length); u++) {
      //                         var g = i[u];
      //                         if ("string" == typeof g || g.content && "string" == typeof g.content) {
      //                            var l = o[r],
      //                               s = t.tokenStack[l],
      //                               f = "string" == typeof g ? g : g.content,
      //                               p = n(a, l),
      //                               k = f.indexOf(p);
      //                            if (k > -1) {
      //                               ++r;
      //                               var m = f.substring(0, k),
      //                                  d = new e.Token(a, e.tokenize(s, t.grammar), "language-" + a, s),
      //                                  h = f.substring(k + p.length),
      //                                  v = [];
      //                               m && v.push.apply(v, c([m])), v.push(d), h && v.push.apply(v, c([h])), "string" == typeof g ? i.splice.apply(i, [u, 1].concat(v)) : g.content = v
      //                            }
      //                         } else g.content && c(g.content)
      //                      }
      //                      return i
      //                   }(t.tokens)
      //                }
      //             }
      //          }
      //       })
      //    }(Prism);
      //    ! function(a) {
      //       a.languages.handlebars = {
      //          comment: /\{\{![\s\S]*?\}\}/,
      //          delimiter: {
      //             pattern: /^\{\{\{?|\}\}\}?$/,
      //             alias: "punctuation"
      //          },
      //          string: /(["'])(?:\\.|(?!\1)[^\\\r\n])*\1/,
      //          number: /\b0x[\dA-Fa-f]+\b|(?:\b\d+(?:\.\d*)?|\B\.\d+)(?:[Ee][+-]?\d+)?/,
      //          boolean: /\b(?:false|true)\b/,
      //          block: {
      //             pattern: /^(\s*(?:~\s*)?)[#\/]\S+?(?=\s*(?:~\s*)?$|\s)/,
      //             lookbehind: !0,
      //             alias: "keyword"
      //          },
      //          brackets: {
      //             pattern: /\[[^\]]+\]/,
      //             inside: {
      //                punctuation: /\[|\]/,
      //                variable: /[\s\S]+/
      //             }
      //          },
      //          punctuation: /[!"#%&':()*+,.\/;<=>@\[\\\]^`{|}~]/,
      //          variable: /[^!"#%&'()*+,\/;<=>@\[\\\]^`{|}~\s]+/
      //       }, a.hooks.add("before-tokenize", (function(e) {
      //          a.languages["markup-templating"].buildPlaceholders(e, "handlebars", /\{\{\{[\s\S]+?\}\}\}|\{\{[\s\S]+?\}\}/g)
      //       })), a.hooks.add("after-tokenize", (function(e) {
      //          a.languages["markup-templating"].tokenizePlaceholders(e, "handlebars")
      //       })), a.languages.hbs = a.languages.handlebars, a.languages.mustache = a.languages.handlebars
      //    }(Prism);
      //    ! function(e) {
      //       var a = /\/\*[\s\S]*?\*\/|\/\/.*|#(?!\[).*/,
      //          t = [{
      //             pattern: /\b(?:false|true)\b/i,
      //             alias: "boolean"
      //          }, {
      //             pattern: /(::\s*)\b[a-z_]\w*\b(?!\s*\()/i,
      //             greedy: !0,
      //             lookbehind: !0
      //          }, {
      //             pattern: /(\b(?:case|const)\s+)\b[a-z_]\w*(?=\s*[;=])/i,
      //             greedy: !0,
      //             lookbehind: !0
      //          }, /\b(?:null)\b/i, /\b[A-Z_][A-Z0-9_]*\b(?!\s*\()/],
      //          i = /\b0b[01]+(?:_[01]+)*\b|\b0o[0-7]+(?:_[0-7]+)*\b|\b0x[\da-f]+(?:_[\da-f]+)*\b|(?:\b\d+(?:_\d+)*\.?(?:\d+(?:_\d+)*)?|\B\.\d+)(?:e[+-]?\d+)?/i,
      //          n = /<\?=>|\?\?=?|\.{3}|\??->|[!=]=?=?|::|\*\*=?|--|\+\+|&&|\|\||<<|>>|[?~]|[/^|%*&<>.+-]=?/,
      //          s = /[{}\[\](),:;]/;
      //       e.languages.php = {
      //          delimiter: {
      //             pattern: /\?>$|^<\?(?:php(?=\s)|=)?/i,
      //             alias: "important"
      //          },
      //          comment: a,
      //          variable: /\$+(?:\w+\b|(?=\{))/,
      //          package: {
      //             pattern: /(namespace\s+|use\s+(?:function\s+)?)(?:\\?\b[a-z_]\w*)+\b(?!\\)/i,
      //             lookbehind: !0,
      //             inside: {
      //                punctuation: /\\/
      //             }
      //          },
      //          "class-name-definition": {
      //             pattern: /(\b(?:class|enum|interface|trait)\s+)\b[a-z_]\w*(?!\\)\b/i,
      //             lookbehind: !0,
      //             alias: "class-name"
      //          },
      //          "function-definition": {
      //             pattern: /(\bfunction\s+)[a-z_]\w*(?=\s*\()/i,
      //             lookbehind: !0,
      //             alias: "function"
      //          },
      //          keyword: [{
      //             pattern: /(\(\s*)\b(?:array|bool|boolean|float|int|integer|object|string)\b(?=\s*\))/i,
      //             alias: "type-casting",
      //             greedy: !0,
      //             lookbehind: !0
      //          }, {
      //             pattern: /([(,?]\s*)\b(?:array(?!\s*\()|bool|callable|(?:false|null)(?=\s*\|)|float|int|iterable|mixed|object|self|static|string)\b(?=\s*\$)/i,
      //             alias: "type-hint",
      //             greedy: !0,
      //             lookbehind: !0
      //          }, {
      //             pattern: /(\)\s*:\s*(?:\?\s*)?)\b(?:array(?!\s*\()|bool|callable|(?:false|null)(?=\s*\|)|float|int|iterable|mixed|never|object|self|static|string|void)\b/i,
      //             alias: "return-type",
      //             greedy: !0,
      //             lookbehind: !0
      //          }, {
      //             pattern: /\b(?:array(?!\s*\()|bool|float|int|iterable|mixed|object|string|void)\b/i,
      //             alias: "type-declaration",
      //             greedy: !0
      //          }, {
      //             pattern: /(\|\s*)(?:false|null)\b|\b(?:false|null)(?=\s*\|)/i,
      //             alias: "type-declaration",
      //             greedy: !0,
      //             lookbehind: !0
      //          }, {
      //             pattern: /\b(?:parent|self|static)(?=\s*::)/i,
      //             alias: "static-context",
      //             greedy: !0
      //          }, {
      //             pattern: /(\byield\s+)from\b/i,
      //             lookbehind: !0
      //          }, /\bclass\b/i, {
      //             pattern: /((?:^|[^\s>:]|(?:^|[^-])>|(?:^|[^:]):)\s*)\b(?:abstract|and|array|as|break|callable|case|catch|clone|const|continue|declare|default|die|do|echo|else|elseif|empty|enddeclare|endfor|endforeach|endif|endswitch|endwhile|enum|eval|exit|extends|final|finally|fn|for|foreach|function|global|goto|if|implements|include|include_once|instanceof|insteadof|interface|isset|list|match|namespace|never|new|or|parent|print|private|protected|public|readonly|require|require_once|return|self|static|switch|throw|trait|try|unset|use|var|while|xor|yield|__halt_compiler)\b/i,
      //             lookbehind: !0
      //          }],
      //          "argument-name": {
      //             pattern: /([(,]\s*)\b[a-z_]\w*(?=\s*:(?!:))/i,
      //             lookbehind: !0
      //          },
      //          "class-name": [{
      //             pattern: /(\b(?:extends|implements|instanceof|new(?!\s+self|\s+static))\s+|\bcatch\s*\()\b[a-z_]\w*(?!\\)\b/i,
      //             greedy: !0,
      //             lookbehind: !0
      //          }, {
      //             pattern: /(\|\s*)\b[a-z_]\w*(?!\\)\b/i,
      //             greedy: !0,
      //             lookbehind: !0
      //          }, {
      //             pattern: /\b[a-z_]\w*(?!\\)\b(?=\s*\|)/i,
      //             greedy: !0
      //          }, {
      //             pattern: /(\|\s*)(?:\\?\b[a-z_]\w*)+\b/i,
      //             alias: "class-name-fully-qualified",
      //             greedy: !0,
      //             lookbehind: !0,
      //             inside: {
      //                punctuation: /\\/
      //             }
      //          }, {
      //             pattern: /(?:\\?\b[a-z_]\w*)+\b(?=\s*\|)/i,
      //             alias: "class-name-fully-qualified",
      //             greedy: !0,
      //             inside: {
      //                punctuation: /\\/
      //             }
      //          }, {
      //             pattern: /(\b(?:extends|implements|instanceof|new(?!\s+self\b|\s+static\b))\s+|\bcatch\s*\()(?:\\?\b[a-z_]\w*)+\b(?!\\)/i,
      //             alias: "class-name-fully-qualified",
      //             greedy: !0,
      //             lookbehind: !0,
      //             inside: {
      //                punctuation: /\\/
      //             }
      //          }, {
      //             pattern: /\b[a-z_]\w*(?=\s*\$)/i,
      //             alias: "type-declaration",
      //             greedy: !0
      //          }, {
      //             pattern: /(?:\\?\b[a-z_]\w*)+(?=\s*\$)/i,
      //             alias: ["class-name-fully-qualified", "type-declaration"],
      //             greedy: !0,
      //             inside: {
      //                punctuation: /\\/
      //             }
      //          }, {
      //             pattern: /\b[a-z_]\w*(?=\s*::)/i,
      //             alias: "static-context",
      //             greedy: !0
      //          }, {
      //             pattern: /(?:\\?\b[a-z_]\w*)+(?=\s*::)/i,
      //             alias: ["class-name-fully-qualified", "static-context"],
      //             greedy: !0,
      //             inside: {
      //                punctuation: /\\/
      //             }
      //          }, {
      //             pattern: /([(,?]\s*)[a-z_]\w*(?=\s*\$)/i,
      //             alias: "type-hint",
      //             greedy: !0,
      //             lookbehind: !0
      //          }, {
      //             pattern: /([(,?]\s*)(?:\\?\b[a-z_]\w*)+(?=\s*\$)/i,
      //             alias: ["class-name-fully-qualified", "type-hint"],
      //             greedy: !0,
      //             lookbehind: !0,
      //             inside: {
      //                punctuation: /\\/
      //             }
      //          }, {
      //             pattern: /(\)\s*:\s*(?:\?\s*)?)\b[a-z_]\w*(?!\\)\b/i,
      //             alias: "return-type",
      //             greedy: !0,
      //             lookbehind: !0
      //          }, {
      //             pattern: /(\)\s*:\s*(?:\?\s*)?)(?:\\?\b[a-z_]\w*)+\b(?!\\)/i,
      //             alias: ["class-name-fully-qualified", "return-type"],
      //             greedy: !0,
      //             lookbehind: !0,
      //             inside: {
      //                punctuation: /\\/
      //             }
      //          }],
      //          constant: t,
      //          function: {
      //             pattern: /(^|[^\\\w])\\?[a-z_](?:[\w\\]*\w)?(?=\s*\()/i,
      //             lookbehind: !0,
      //             inside: {
      //                punctuation: /\\/
      //             }
      //          },
      //          property: {
      //             pattern: /(->\s*)\w+/,
      //             lookbehind: !0
      //          },
      //          number: i,
      //          operator: n,
      //          punctuation: s
      //       };
      //       var l = {
      //             pattern: /\{\$(?:\{(?:\{[^{}]+\}|[^{}]+)\}|[^{}])+\}|(^|[^\\{])\$+(?:\w+(?:\[[^\r\n\[\]]+\]|->\w+)?)/,
      //             lookbehind: !0,
      //             inside: e.languages.php
      //          },
      //          r = [{
      //             pattern: /<<<'([^']+)'[\r\n](?:.*[\r\n])*?\1;/,
      //             alias: "nowdoc-string",
      //             greedy: !0,
      //             inside: {
      //                delimiter: {
      //                   pattern: /^<<<'[^']+'|[a-z_]\w*;$/i,
      //                   alias: "symbol",
      //                   inside: {
      //                      punctuation: /^<<<'?|[';]$/
      //                   }
      //                }
      //             }
      //          }, {
      //             pattern: /<<<(?:"([^"]+)"[\r\n](?:.*[\r\n])*?\1;|([a-z_]\w*)[\r\n](?:.*[\r\n])*?\2;)/i,
      //             alias: "heredoc-string",
      //             greedy: !0,
      //             inside: {
      //                delimiter: {
      //                   pattern: /^<<<(?:"[^"]+"|[a-z_]\w*)|[a-z_]\w*;$/i,
      //                   alias: "symbol",
      //                   inside: {
      //                      punctuation: /^<<<"?|[";]$/
      //                   }
      //                },
      //                interpolation: l
      //             }
      //          }, {
      //             pattern: /`(?:\\[\s\S]|[^\\`])*`/,
      //             alias: "backtick-quoted-string",
      //             greedy: !0
      //          }, {
      //             pattern: /'(?:\\[\s\S]|[^\\'])*'/,
      //             alias: "single-quoted-string",
      //             greedy: !0
      //          }, {
      //             pattern: /"(?:\\[\s\S]|[^\\"])*"/,
      //             alias: "double-quoted-string",
      //             greedy: !0,
      //             inside: {
      //                interpolation: l
      //             }
      //          }];
      //       e.languages.insertBefore("php", "variable", {
      //          string: r,
      //          attribute: {
      //             pattern: /#\[(?:[^"'\/#]|\/(?![*/])|\/\/.*$|#(?!\[).*$|\/\*(?:[^*]|\*(?!\/))*\*\/|"(?:\\[\s\S]|[^\\"])*"|'(?:\\[\s\S]|[^\\'])*')+\](?=\s*[a-z$#])/im,
      //             greedy: !0,
      //             inside: {
      //                "attribute-content": {
      //                   pattern: /^(#\[)[\s\S]+(?=\]$)/,
      //                   lookbehind: !0,
      //                   inside: {
      //                      comment: a,
      //                      string: r,
      //                      "attribute-class-name": [{
      //                         pattern: /([^:]|^)\b[a-z_]\w*(?!\\)\b/i,
      //                         alias: "class-name",
      //                         greedy: !0,
      //                         lookbehind: !0
      //                      }, {
      //                         pattern: /([^:]|^)(?:\\?\b[a-z_]\w*)+/i,
      //                         alias: ["class-name", "class-name-fully-qualified"],
      //                         greedy: !0,
      //                         lookbehind: !0,
      //                         inside: {
      //                            punctuation: /\\/
      //                         }
      //                      }],
      //                      constant: t,
      //                      number: i,
      //                      operator: n,
      //                      punctuation: s
      //                   }
      //                },
      //                delimiter: {
      //                   pattern: /^#\[|\]$/,
      //                   alias: "punctuation"
      //                }
      //             }
      //          }
      //       }), e.hooks.add("before-tokenize", (function(a) {
      //          /<\?/.test(a.code) && e.languages["markup-templating"].buildPlaceholders(a, "php", /<\?(?:[^"'/#]|\/(?![*/])|("|')(?:\\[\s\S]|(?!\1)[^\\])*\1|(?:\/\/|#(?!\[))(?:[^?\n\r]|\?(?!>))*(?=$|\?>|[\r\n])|#\[|\/\*(?:[^*]|\*(?!\/))*(?:\*\/|$))*?(?:\?>|$)/g)
      //       })), e.hooks.add("after-tokenize", (function(a) {
      //          e.languages["markup-templating"].tokenizePlaceholders(a, "php")
      //       }))
      //    }(Prism);
      //    ! function(e) {
      //       var n = {
      //             pattern: /(\b\d+)(?:%|[a-z]+)/,
      //             lookbehind: !0
      //          },
      //          r = {
      //             pattern: /(^|[^\w.-])-?(?:\d+(?:\.\d+)?|\.\d+)/,
      //             lookbehind: !0
      //          },
      //          t = {
      //             comment: {
      //                pattern: /(^|[^\\])(?:\/\*[\s\S]*?\*\/|\/\/.*)/,
      //                lookbehind: !0
      //             },
      //             url: {
      //                pattern: /\burl\((["']?).*?\1\)/i,
      //                greedy: !0
      //             },
      //             string: {
      //                pattern: /("|')(?:(?!\1)[^\\\r\n]|\\(?:\r\n|[\s\S]))*\1/,
      //                greedy: !0
      //             },
      //             interpolation: null,
      //             func: null,
      //             important: /\B!(?:important|optional)\b/i,
      //             keyword: {
      //                pattern: /(^|\s+)(?:(?:else|for|if|return|unless)(?=\s|$)|@[\w-]+)/,
      //                lookbehind: !0
      //             },
      //             hexcode: /#[\da-f]{3,6}/i,
      //             color: [/\b(?:AliceBlue|AntiqueWhite|Aqua|Aquamarine|Azure|Beige|Bisque|Black|BlanchedAlmond|Blue|BlueViolet|Brown|BurlyWood|CadetBlue|Chartreuse|Chocolate|Coral|CornflowerBlue|Cornsilk|Crimson|Cyan|DarkBlue|DarkCyan|DarkGoldenRod|DarkGr[ae]y|DarkGreen|DarkKhaki|DarkMagenta|DarkOliveGreen|DarkOrange|DarkOrchid|DarkRed|DarkSalmon|DarkSeaGreen|DarkSlateBlue|DarkSlateGr[ae]y|DarkTurquoise|DarkViolet|DeepPink|DeepSkyBlue|DimGr[ae]y|DodgerBlue|FireBrick|FloralWhite|ForestGreen|Fuchsia|Gainsboro|GhostWhite|Gold|GoldenRod|Gr[ae]y|Green|GreenYellow|HoneyDew|HotPink|IndianRed|Indigo|Ivory|Khaki|Lavender|LavenderBlush|LawnGreen|LemonChiffon|LightBlue|LightCoral|LightCyan|LightGoldenRodYellow|LightGr[ae]y|LightGreen|LightPink|LightSalmon|LightSeaGreen|LightSkyBlue|LightSlateGr[ae]y|LightSteelBlue|LightYellow|Lime|LimeGreen|Linen|Magenta|Maroon|MediumAquaMarine|MediumBlue|MediumOrchid|MediumPurple|MediumSeaGreen|MediumSlateBlue|MediumSpringGreen|MediumTurquoise|MediumVioletRed|MidnightBlue|MintCream|MistyRose|Moccasin|NavajoWhite|Navy|OldLace|Olive|OliveDrab|Orange|OrangeRed|Orchid|PaleGoldenRod|PaleGreen|PaleTurquoise|PaleVioletRed|PapayaWhip|PeachPuff|Peru|Pink|Plum|PowderBlue|Purple|Red|RosyBrown|RoyalBlue|SaddleBrown|Salmon|SandyBrown|SeaGreen|SeaShell|Sienna|Silver|SkyBlue|SlateBlue|SlateGr[ae]y|Snow|SpringGreen|SteelBlue|Tan|Teal|Thistle|Tomato|Transparent|Turquoise|Violet|Wheat|White|WhiteSmoke|Yellow|YellowGreen)\b/i, {
      //                pattern: /\b(?:hsl|rgb)\(\s*\d{1,3}\s*,\s*\d{1,3}%?\s*,\s*\d{1,3}%?\s*\)\B|\b(?:hsl|rgb)a\(\s*\d{1,3}\s*,\s*\d{1,3}%?\s*,\s*\d{1,3}%?\s*,\s*(?:0|0?\.\d+|1)\s*\)\B/i,
      //                inside: {
      //                   unit: n,
      //                   number: r,
      //                   function: /[\w-]+(?=\()/,
      //                   punctuation: /[(),]/
      //                }
      //             }],
      //             entity: /\\[\da-f]{1,8}/i,
      //             unit: n,
      //             boolean: /\b(?:false|true)\b/,
      //             operator: [/~|[+!\/%<>?=]=?|[-:]=|\*[*=]?|\.{2,3}|&&|\|\||\B-\B|\b(?:and|in|is(?: a| defined| not|nt)?|not|or)\b/],
      //             number: r,
      //             punctuation: /[{}()\[\];:,]/
      //          };
      //       t.interpolation = {
      //          pattern: /\{[^\r\n}:]+\}/,
      //          alias: "variable",
      //          inside: {
      //             delimiter: {
      //                pattern: /^\{|\}$/,
      //                alias: "punctuation"
      //             },
      //             rest: t
      //          }
      //       }, t.func = {
      //          pattern: /[\w-]+\([^)]*\).*/,
      //          inside: {
      //             function: /^[^(]+/,
      //             rest: t
      //          }
      //       }, e.languages.stylus = {
      //          "atrule-declaration": {
      //             pattern: /(^[ \t]*)@.+/m,
      //             lookbehind: !0,
      //             inside: {
      //                atrule: /^@[\w-]+/,
      //                rest: t
      //             }
      //          },
      //          "variable-declaration": {
      //             pattern: /(^[ \t]*)[\w$-]+\s*.?=[ \t]*(?:\{[^{}]*\}|\S.*|$)/m,
      //             lookbehind: !0,
      //             inside: {
      //                variable: /^\S+/,
      //                rest: t
      //             }
      //          },
      //          statement: {
      //             pattern: /(^[ \t]*)(?:else|for|if|return|unless)[ \t].+/m,
      //             lookbehind: !0,
      //             inside: {
      //                keyword: /^\S+/,
      //                rest: t
      //             }
      //          },
      //          "property-declaration": {
      //             pattern: /((?:^|\{)([ \t]*))(?:[\w-]|\{[^}\r\n]+\})+(?:\s*:\s*|[ \t]+)(?!\s)[^{\r\n]*(?:;|[^{\r\n,]$(?!(?:\r?\n|\r)(?:\{|\2[ \t])))/m,
      //             lookbehind: !0,
      //             inside: {
      //                property: {
      //                   pattern: /^[^\s:]+/,
      //                   inside: {
      //                      interpolation: t.interpolation
      //                   }
      //                },
      //                rest: t
      //             }
      //          },
      //          selector: {
      //             pattern: /(^[ \t]*)(?:(?=\S)(?:[^{}\r\n:()]|::?[\w-]+(?:\([^)\r\n]*\)|(?![\w-]))|\{[^}\r\n]+\})+)(?:(?:\r?\n|\r)(?:\1(?:(?=\S)(?:[^{}\r\n:()]|::?[\w-]+(?:\([^)\r\n]*\)|(?![\w-]))|\{[^}\r\n]+\})+)))*(?:,$|\{|(?=(?:\r?\n|\r)(?:\{|\1[ \t])))/m,
      //             lookbehind: !0,
      //             inside: {
      //                interpolation: t.interpolation,
      //                comment: t.comment,
      //                punctuation: /[{},]/
      //             }
      //          },
      //          func: t.func,
      //          string: t.string,
      //          comment: {
      //             pattern: /(^|[^\\])(?:\/\*[\s\S]*?\*\/|\/\/.*)/,
      //             lookbehind: !0,
      //             greedy: !0
      //          },
      //          interpolation: t.interpolation,
      //          punctuation: /[{}()\[\];:.]/
      //       }
      //    }(Prism);
      //    "undefined" != typeof Prism && "undefined" != typeof document && document.createRange && (Prism.plugins.KeepMarkup = !0, Prism.hooks.add("before-highlight", (function(e) {
      //       if (e.element.children.length && Prism.util.isActive(e.element, "keep-markup", !0)) {
      //          var n = Prism.util.isActive(e.element, "drop-tokens", !1),
      //             t = 0,
      //             o = [];
      //          r(e.element), o.length && (e.keepMarkup = o)
      //       }

      //       function d(e) {
      //          if (function(e) {
      //                return !n || "span" !== e.nodeName.toLowerCase() || !e.classList.contains("token")
      //             }(e)) {
      //             var d = {
      //                element: e,
      //                posOpen: t
      //             };
      //             o.push(d), r(e), d.posClose = t
      //          } else r(e)
      //       }

      //       function r(e) {
      //          for (var n = 0, o = e.childNodes.length; n < o; n++) {
      //             var r = e.childNodes[n];
      //             1 === r.nodeType ? d(r) : 3 === r.nodeType && (t += r.data.length)
      //          }
      //       }
      //    })), Prism.hooks.add("after-highlight", (function(e) {
      //       if (e.keepMarkup && e.keepMarkup.length) {
      //          var n = function(e, t) {
      //             for (var o = 0, d = e.childNodes.length; o < d; o++) {
      //                var r = e.childNodes[o];
      //                if (1 === r.nodeType) {
      //                   if (!n(r, t)) return !1
      //                } else 3 === r.nodeType && (!t.nodeStart && t.pos + r.data.length > t.node.posOpen && (t.nodeStart = r, t.nodeStartPos = t.node.posOpen - t.pos), t.nodeStart && t.pos + r.data.length >= t.node.posClose && (t.nodeEnd = r, t.nodeEndPos = t.node.posClose - t.pos), t.pos += r.data.length);
      //                if (t.nodeStart && t.nodeEnd) {
      //                   var s = document.createRange();
      //                   return s.setStart(t.nodeStart, t.nodeStartPos), s.setEnd(t.nodeEnd, t.nodeEndPos), t.node.element.innerHTML = "", t.node.element.appendChild(s.extractContents()), s.insertNode(t.node.element), s.detach(), !1
      //                }
      //             }
      //             return !0
      //          };
      //          e.keepMarkup.forEach((function(t) {
      //             n(e.element, {
      //                node: t,
      //                pos: 0
      //             })
      //          })), e.highlightedCode = e.element.innerHTML
      //       }
      //    })));
      //    ! function() {
      //       if ("undefined" != typeof Prism) {
      //          var e = Object.assign || function(e, t) {
      //                for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n]);
      //                return e
      //             },
      //             t = {
      //                "remove-trailing": "boolean",
      //                "remove-indent": "boolean",
      //                "left-trim": "boolean",
      //                "right-trim": "boolean",
      //                "break-lines": "number",
      //                indent: "number",
      //                "remove-initial-line-feed": "boolean",
      //                "tabs-to-spaces": "number",
      //                "spaces-to-tabs": "number"
      //             };
      //          n.prototype = {
      //             setDefaults: function(t) {
      //                this.defaults = e(this.defaults, t)
      //             },
      //             normalize: function(t, n) {
      //                for (var r in n = e(this.defaults, n)) {
      //                   var i = r.replace(/-(\w)/g, (function(e, t) {
      //                      return t.toUpperCase()
      //                   }));
      //                   "normalize" !== r && "setDefaults" !== i && n[r] && this[i] && (t = this[i].call(this, t, n[r]))
      //                }
      //                return t
      //             },
      //             leftTrim: function(e) {
      //                return e.replace(/^\s+/, "")
      //             },
      //             rightTrim: function(e) {
      //                return e.replace(/\s+$/, "")
      //             },
      //             tabsToSpaces: function(e, t) {
      //                return t = 0 | t || 4, e.replace(/\t/g, new Array(++t).join(" "))
      //             },
      //             spacesToTabs: function(e, t) {
      //                return t = 0 | t || 4, e.replace(RegExp(" {" + t + "}", "g"), "\t")
      //             },
      //             removeTrailing: function(e) {
      //                return e.replace(/\s*?$/gm, "")
      //             },
      //             removeInitialLineFeed: function(e) {
      //                return e.replace(/^(?:\r?\n|\r)/, "")
      //             },
      //             removeIndent: function(e) {
      //                var t = e.match(/^[^\S\n\r]*(?=\S)/gm);
      //                return t && t[0].length ? (t.sort((function(e, t) {
      //                   return e.length - t.length
      //                })), t[0].length ? e.replace(RegExp("^" + t[0], "gm"), "") : e) : e
      //             },
      //             indent: function(e, t) {
      //                return e.replace(/^[^\S\n\r]*(?=\S)/gm, new Array(++t).join("\t") + "$&")
      //             },
      //             breakLines: function(e, t) {
      //                t = !0 === t ? 80 : 0 | t || 80;
      //                for (var n = e.split("\n"), i = 0; i < n.length; ++i)
      //                   if (!(r(n[i]) <= t)) {
      //                      for (var o = n[i].split(/(\s+)/g), a = 0, l = 0; l < o.length; ++l) {
      //                         var s = r(o[l]);
      //                         (a += s) > t && (o[l] = "\n" + o[l], a = s)
      //                      }
      //                      n[i] = o.join("")
      //                   } return n.join("\n")
      //             }
      //          }, "undefined" != typeof module && module.exports && (module.exports = n), Prism.plugins.NormalizeWhitespace = new n({
      //             "remove-trailing": !0,
      //             "remove-indent": !0,
      //             "left-trim": !0,
      //             "right-trim": !0
      //          }), Prism.hooks.add("before-sanity-check", (function(e) {
      //             var n = Prism.plugins.NormalizeWhitespace;
      //             if ((!e.settings || !1 !== e.settings["whitespace-normalization"]) && Prism.util.isActive(e.element, "whitespace-normalization", !0))
      //                if (e.element && e.element.parentNode || !e.code) {
      //                   var r = e.element.parentNode;
      //                   if (e.code && r && "pre" === r.nodeName.toLowerCase()) {
      //                      for (var i in null == e.settings && (e.settings = {}), t)
      //                         if (Object.hasOwnProperty.call(t, i)) {
      //                            var o = t[i];
      //                            if (r.hasAttribute("data-" + i)) try {
      //                               var a = JSON.parse(r.getAttribute("data-" + i) || "true");
      //                               typeof a === o && (e.settings[i] = a)
      //                            } catch (e) {}
      //                         } for (var l = r.childNodes, s = "", c = "", u = !1, m = 0; m < l.length; ++m) {
      //                         var f = l[m];
      //                         f == e.element ? u = !0 : "#text" === f.nodeName && (u ? c += f.nodeValue : s += f.nodeValue, r.removeChild(f), --m)
      //                      }
      //                      if (e.element.children.length && Prism.plugins.KeepMarkup) {
      //                         var d = s + e.element.innerHTML + c;
      //                         e.element.innerHTML = n.normalize(d, e.settings), e.code = e.element.textContent
      //                      } else e.code = s + e.code + c, e.code = n.normalize(e.code, e.settings)
      //                   }
      //                } else e.code = n.normalize(e.code, e.settings)
      //          }))
      //       }

      //       function n(t) {
      //          this.defaults = e({}, t)
      //       }

      //       function r(e) {
      //          for (var t = 0, n = 0; n < e.length; ++n) e.charCodeAt(n) == "\t".charCodeAt(0) && (t += 3);
      //          return e.length + t
      //       }
      //    }();
      //    ! function() {
      //       if ("undefined" != typeof Prism && "undefined" != typeof document) {
      //          var e = [],
      //             t = {},
      //             n = function() {};
      //          Prism.plugins.toolbar = {};
      //          var a = Prism.plugins.toolbar.registerButton = function(n, a) {
      //                var r;
      //                r = "function" == typeof a ? a : function(e) {
      //                   var t;
      //                   return "function" == typeof a.onClick ? ((t = document.createElement("button")).type = "button", t.addEventListener("click", (function() {
      //                      a.onClick.call(this, e)
      //                   }))) : "string" == typeof a.url ? (t = document.createElement("a")).href = a.url : t = document.createElement("span"), a.className && t.classList.add(a.className), t.textContent = a.text, t
      //                }, n in t ? console.warn('There is a button with the key "' + n + '" registered already.') : e.push(t[n] = r)
      //             },
      //             r = Prism.plugins.toolbar.hook = function(a) {
      //                var r = a.element.parentNode;
      //                if (r && /pre/i.test(r.nodeName) && !r.parentNode.classList.contains("code-toolbar")) {
      //                   var o = document.createElement("div");
      //                   o.classList.add("code-toolbar"), r.parentNode.insertBefore(o, r), o.appendChild(r);
      //                   var i = document.createElement("div");
      //                   i.classList.add("toolbar");
      //                   var l = e,
      //                      d = function(e) {
      //                         for (; e;) {
      //                            var t = e.getAttribute("data-toolbar-order");
      //                            if (null != t) return (t = t.trim()).length ? t.split(/\s*,\s*/g) : [];
      //                            e = e.parentElement
      //                         }
      //                      }(a.element);
      //                   d && (l = d.map((function(e) {
      //                      return t[e] || n
      //                   }))), l.forEach((function(e) {
      //                      var t = e(a);
      //                      if (t) {
      //                         var n = document.createElement("div");
      //                         n.classList.add("toolbar-item"), n.appendChild(t), i.appendChild(n)
      //                      }
      //                   })), o.appendChild(i)
      //                }
      //             };
      //          a("label", (function(e) {
      //             var t = e.element.parentNode;
      //             if (t && /pre/i.test(t.nodeName) && t.hasAttribute("data-label")) {
      //                var n, a, r = t.getAttribute("data-label");
      //                try {
      //                   a = document.querySelector("template#" + r)
      //                } catch (e) {}
      //                return a ? n = a.content : (t.hasAttribute("data-url") ? (n = document.createElement("a")).href = t.getAttribute("data-url") : n = document.createElement("span"), n.textContent = r), n
      //             }
      //          })), Prism.hooks.add("complete", r)
      //       }
      //    }();
      // }

      // setupHighlighting();
   </script>

   <?php wp_footer(); ?>
   </body>

   </html>