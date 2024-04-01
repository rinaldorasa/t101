
<pre>

Python 3.11.1 (tags/v3.11.1:a7a450f, Dec  6 2022, 19:58:39) [MSC v.1934 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license" for more information.
>>> dir
&lt;built-in function dir>
>>> ?
  File "&lt;stdin>", line 1
    ?
    ^
SyntaxError: invalid syntax
>>> print 3+2;
  File "&lt;stdin>", line 1
    print 3+2;
    ^^^^^^^^^
SyntaxError: Missing parentheses in call to 'print'. Did you mean print(...)?
>>> print (3+2);
5
>>> x=3, y=2
  File "&lt;stdin>", line 1
    x=3, y=2
    ^^^
SyntaxError: invalid syntax. Maybe you meant '==' or ':=' instead of '='?
>>> x=3
>>> print x;
  File "&lt;stdin>", line 1
    print x;
    ^^^^^^^
SyntaxError: Missing parentheses in call to 'print'. Did you mean print(...)?
>>> print (x)
3
>>> help
Type help() for interactive help, or help(object) for help about object.
>>> help ()

Welcome to Python 3.11's help utility!

If this is your first time using Python, you should definitely check out
the tutorial on the internet at https://docs.python.org/3.11/tutorial/.

Enter the name of any module, keyword, or topic to get help on writing
Python programs and using Python modules.  To quit this help utility and
return to the interpreter, just type "quit".

To get a list of available modules, keywords, symbols, or topics, type
"modules", "keywords", "symbols", or "topics".  Each module also comes
with a one-line summary of what it does; to list the modules whose name
or summary contain a given string such as "spam", type "modules spam".

help> modules

Please wait a moment while I gather a list of all available modules...

test_sqlite3: testing with version '2.6.0', sqlite_version '3.39.4'
C:\Users\RASA\AppData\Local\Programs\Python\Python311\Lib\site-packages\_distutils_hack\__init__.py:33: UserWarning: Setuptools is replacing distutils.
  warnings.warn("Setuptools is replacing distutils.")
__future__          _testmultiphase     genericpath         runpy
__hello__           _thread             getopt              sched
__phello__          _threading_local    getpass             secrets
_abc                _tkinter            gettext             select
_aix_support        _tokenize           glob                selectors
_ast                _tracemalloc        graphlib            setuptools
_asyncio            _typing             gzip                shelve
_bisect             _uuid               hashlib             shlex
_blake2             _warnings           heapq               shutil
_bootsubprocess     _weakref            hmac                signal
_bz2                _weakrefset         html                site
_codecs             _winapi             http                smtpd
_codecs_cn          _xxsubinterpreters  idlelib             smtplib
_codecs_hk          _zoneinfo           imaplib             sndhdr
_codecs_iso2022     abc                 imghdr              socket
_codecs_jp          aifc                imp                 socketserver
_codecs_kr          antigravity         importlib           sqlite3
_codecs_tw          argparse            inspect             sre_compile
_collections        array               io                  sre_constants
_collections_abc    ast                 ipaddress           sre_parse
_compat_pickle      asynchat            itertools           ssl
_compression        asyncio             json                stat
_contextvars        asyncore            keyword             statistics
_csv                atexit              lib2to3             string
_ctypes             audioop             linecache           stringprep
_ctypes_test        base64              locale              struct
_datetime           bdb                 logging             subprocess
_decimal            binascii            lzma                sunau
_distutils_hack     bisect              mailbox             symtable
_elementtree        builtins            mailcap             sys
_functools          bz2                 marshal             sysconfig
_hashlib            cProfile            math                tabnanny
_heapq              calendar            mimetypes           tarfile
_imp                cgi                 mmap                telnetlib
_io                 cgitb               modulefinder        tempfile
_json               chunk               msilib              test
_locale             cmath               msvcrt              textwrap
_lsprof             cmd                 multiprocessing     this
_lzma               code                netrc               threading
_markupbase         codecs              nntplib             time
_md5                codeop              nt                  timeit
_msi                collections         ntpath              tkinter
_multibytecodec     colorsys            nturl2path          token
_multiprocessing    compileall          numbers             tokenize
_opcode             concurrent          opcode              tomllib
_operator           configparser        operator            trace
_osx_support        contextlib          optparse            traceback
_overlapped         contextvars         os                  tracemalloc
_pickle             copy                pathlib             tty
_py_abc             copyreg             pdb                 turtle
_pydecimal          crypt               pickle              turtledemo
_pyio               csv                 pickletools         types
_queue              ctypes              pip                 typing
_random             curses              pipes               unicodedata
_sha1               dataclasses         pkg_resources       unittest
_sha256             datetime            pkgutil             urllib
_sha3               dbm                 platform            uu
_sha512             decimal             plistlib            uuid
_signal             difflib             poplib              venv
_sitebuiltins       dis                 posixpath           warnings
_socket             distutils           pprint              wave
_sqlite3            doctest             profile             weakref
_sre                email               pstats              webbrowser
_ssl                encodings           pty                 winreg
_stat               ensurepip           py_compile          winsound
_statistics         enum                pyclbr              wsgiref
_string             errno               pydoc               xdrlib
_strptime           faulthandler        pydoc_data          xml
_struct             filecmp             pyexpat             xmlrpc
_symtable           fileinput           queue               xxsubtype
_testbuffer         fnmatch             quopri              zipapp
_testcapi           fractions           random              zipfile
_testconsole        ftplib              re                  zipimport
_testimportmultiple functools           reprlib             zlib
_testinternalcapi   gc                  rlcompleter         zoneinfo

Enter any module name to get more help.  Or, type "modules spam" to search
for modules whose name or summary contain the string "spam".

help>


</pre>