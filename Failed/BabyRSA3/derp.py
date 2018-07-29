import gmpy2
import itertools
from functools import reduce

def P(a):
    return reduce(lambda x, y: x*y, a)

a = []
a.append(2)
a.append(2)
a.append(2767687179787)
a.append(7230980905199)
a.append(3680247726403)
a.append(7265658595571)
a.append(6545600536253)
a.append(6579600728639)
a.append(3639128890921)
a.append(333600482773)
a.append(9220079755217)
a.append(8313722160551)
a.append(9566431650679)
a.append(6938103821809)
a.append(6438418759151)
a.append(2293498615990071511610820895302086940796564989168281123737588839386922876088484808070018553110125686555051)
a.append(4754509728797)
a.append(6672422609813)
a.append(1973804930501)
a.append(6060693342503)
a.append(1984419944251)
a.append(4065711354007)

a = [2 , 2 , 333600482773 , 2767687179787 , 3639128890921 , 3680247726403 , 520482155911030985522407130784933200276054511296446894461426771937620276021981188426029637173475853437086816089874898971137267100732468220304233016458505802994919418208846567823984005341882240704273708257060876529943709270175869608929786262709341504642645577475714568308755775992937928394748182821]

c = 5499541793182458916572235549176816842668241174266452504513113060755436878677967801073969318886578771261808846567771826513941339489235903308596884669082743082338194484742630141310604711117885643229642732544775605225440292634865971099525895746978617397424574658645139588374017720075991171820873126258830306451326541384750806605195470098194462985494
d = 15664449102383123741256492823637853135125214807384742239549570131336662433268993001893338579081447660916548171028888182200587902832321164315176336792229529488626556438838274357507327295590873540152237706572328731885382033467068457038670389341764040515475556103158917133155868200492242619473451848383350924192696773958592530565397202086200003936447
phi = 25744472610420721576721354142700666534585707423276540379553111662924462766649397845238736588395849560582824664399879219093936415146333463826035714360316647265405615591383999147878527778914526369981160444050742606139799706884875928674153255909145624833489266194817757115584913491575124670523917871310421296173148930930573096639196103714702234087492

for n in range(1, 12):
    for i in itertools.combinations(a, n):
        if (gmpy2.is_prime(P(i) + 1)) and gmpy2.is_prime(phi // P(i) + 1):
            p = P(i) + 1
            q = phi // P(i) + 1

            n = p * q
            plain = pow(c, d, n)
            print(bytes.fromhex(hex(plain)[2:]))#.decode('hex')
            exit()