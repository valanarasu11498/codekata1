#include <stdio.h>
#include<string.h>
int main()
{
    char s[100],i,c=0;
    //scanf("%[^\n]s",s);
    gets(s);
    while(s[i]!='\0')
    {
        if(s[i]=='.')
        {
            c=c+1;
        }
        i++;
    }
    c=c+1;
    printf("%d",c);
    
    return 0;
}
